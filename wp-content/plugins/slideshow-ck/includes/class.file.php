<?php
/**
 * @copyright	Copyright (C) 2016. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Plugins CK - Cédric KEIFLIN - http://www.wp-pluginsck.com
 */
defined('ABSPATH') or die;

/**
 * A File handling class
 *
 */
class SlideshowckFile
{
	/**
	 * Function to strip additional / or \ in a path name.
	 *
	 * @param   string  $path  The path to clean.
	 * @param   string  $ds    Directory separator (optional).
	 *
	 * @return  string  The cleaned path.
	 *
	 * @since   11.1
	 * @throws  UnexpectedValueException
	 */
	public static function clean($path, $ds = DIRECTORY_SEPARATOR)
	{
		if (!is_string($path) && !empty($path))
		{
			throw new UnexpectedValueException('clean: $path is not a string.');
		}

		$path = trim($path);

		if (empty($path))
		{
			$path = ABSPATH;
		}
		// Remove double slashes and backslashes and convert all slashes and backslashes to DIRECTORY_SEPARATOR
		// If dealing with a UNC path don't forget to prepend the path with a backslash.
		elseif (($ds == '\\') && ($path[0] == '\\' ) && ( $path[1] == '\\' ))
		{
			$path = "\\" . preg_replace('#[/\\\\]+#', $ds, $path);
		}
		else
		{
			$path = preg_replace('#[/\\\\]+#', $ds, $path);
		}

		return $path;
	}

	/**
	 * Gets the extension of a file name
	 *
	 * @param   string  $file  The file name
	 *
	 * @return  string  The file extension
	 *
	 */
	public static function getExt($file)
	{
		$dot = strrpos($file, '.') + 1;

		return substr($file, $dot);
	}

	/**
	 * Strips the last extension off of a file name
	 *
	 * @param   string  $file  The file name
	 *
	 * @return  string  The file name without the extension
	 *
	 */
	public static function stripExt($file)
	{
		return preg_replace('#\.[^.]*$#', '', $file);
	}

	/**
	 * Makes file name safe to use
	 *
	 * @param   string  $file  The name of the file [not full path]
	 *
	 * @return  string  The sanitised string
	 *
	 */
	public static function makeSafe($file)
	{
		// Remove any trailing dots, as those aren't ever valid file names.
		$file = rtrim($file, '.');

		$regex = array('#(\.){2,}#', '#[^A-Za-z0-9\.\_\- ]#', '#^\.#');

		return trim(preg_replace($regex, '', $file));
	}

	/**
	 * Copies a file
	 *
	 * @param   string   $src          The path to the source file
	 * @param   string   $dest         The path to the destination file
	 * @param   string   $path         An optional base path to prefix to the file names
	 *
	 * @return  boolean  True on success
	 *
	 */
	public static function copy($src, $dest, $path = null)
	{
		// Prepend a base path if it exists
		if ($path)
		{
			$src = self::clean($path . '/' . $src);
			$dest = self::clean($path . '/' . $dest);
		}

		// Check src path
		if (!is_readable($src))
		{
			return false;
		}
		if (!@ copy($src, $dest))
		{
			return false;
		}

		$ret = true;

		return $ret;

	}

	/**
	 * Delete a file or array of files
	 *
	 * @param   mixed  $file  The file name or an array of file names
	 *
	 * @return  boolean  True on success
	 *
	 */
	public static function delete($file)
	{
		if (is_array($file))
		{
			$files = $file;
		}
		else
		{
			$files[] = $file;
		}

		foreach ($files as $file)
		{
			$file = self::clean($file);

			if (!is_file($file))
			{
				continue;
			}

			// Try making the file writable first. If it's read-only, it can't be deleted
			// on Windows, even if the parent folder is writable
			@chmod($file, 0777);

			// In case of restricted permissions we zap it one way or the other
			// as long as the owner is either the webserver or the ftp
			if (@unlink($file))
			{
				// Do nothing
			}
			else
			{
				$filename = basename($file);

				return false;
			}
		}

		return true;
	}

	/**
	 * Moves a file
	 *
	 * @param   string   $src          The path to the source file
	 * @param   string   $dest         The path to the destination file
	 * @param   string   $path         An optional base path to prefix to the file names
	 *
	 * @return  boolean  True on success
	 *
	 */
	public static function move($src, $dest, $path = '')
	{
		if ($path)
		{
			$src = self::clean($path . '/' . $src);
			$dest = self::clean($path . '/' . $dest);
		}

		// Check src path
		if (!is_readable($src))
		{
			return __('Can not find source file');
		}

		if (!@ rename($src, $dest))
		{

			return false;
		}

			return true;
	}

	/**
	 * Read the contents of a file
	 *
	 * @param   string   $filename   The full file path
	 * @param   boolean  $incpath    Use include path
	 * @param   integer  $amount     Amount of file to read
	 * @param   integer  $chunksize  Size of chunks to read
	 * @param   integer  $offset     Offset of the file
	 *
	 * @return  mixed  Returns file contents or boolean False if failed
	 *
	 */
	public static function read($filename, $incpath = false, $amount = 0, $chunksize = 8192, $offset = 0)
	{
		$data = null;

		if ($amount && $chunksize > $amount)
		{
			$chunksize = $amount;
		}

		if (false === $fh = fopen($filename, 'rb', $incpath))
		{
			return false;
		}

		clearstatcache();

		if ($offset)
		{
			fseek($fh, $offset);
		}

		if ($fsize = @ filesize($filename))
		{
			if ($amount && $fsize > $amount)
			{
				$data = fread($fh, $amount);
			}
			else
			{
				$data = fread($fh, $fsize);
			}
		}
		else
		{
			$data = '';

			/*
			 * While it's:
			 * 1: Not the end of the file AND
			 * 2a: No Max Amount set OR
			 * 2b: The length of the data is less than the max amount we want
			 */
			while (!feof($fh) && (!$amount || strlen($data) < $amount))
			{
				$data .= fread($fh, $chunksize);
			}
		}

		fclose($fh);

		return $data;
	}

	/**
	 * Write contents to a file
	 *
	 * @param   string   $file         The full file path
	 * @param   string   &$buffer      The buffer to write
	 *
	 * @return  boolean  True on success
	 *
	 */
	public static function write($file, &$buffer)
	{
		@set_time_limit(ini_get('max_execution_time'));

		// If the destination directory doesn't exist we need to create it
		if (!file_exists(dirname($file)))
		{
			// jimport('joomla.filesystem.folder');
			require_once(dirname( __FILE__ ) . '/class.folder.php');

			if (SlideshowckFolder::create(dirname($file)) == false)
			{
				return false;
			}
		}

		$file = self::clean($file);
		$ret = is_int(file_put_contents($file, $buffer)) ? true : false;

		return $ret;
	}

	/**
	 * Moves an uploaded file to a destination folder
	 *
	 * @param   string   $src          The name of the php (temporary) uploaded file
	 * @param   string   $dest         The path (including filename) to move the uploaded file to
	 *
	 * @return  boolean  True on success
	 *
	 */
	public static function upload($src, $dest)
	{
		// Ensure that the path is valid and clean
		$dest = self::clean($dest);

		// Create the destination directory if it does not exist
		$baseDir = dirname($dest);

		if (!file_exists($baseDir))
		{
			// jimport('joomla.filesystem.folder');
			TCK_Folder::create($baseDir);
		}

		$ret = false;

		if (is_writeable($baseDir) && move_uploaded_file($src, $dest))
		{
			// Short circuit to prevent file permission errors
			if (JPath::setPermissions($dest))
			{
				$ret = true;
			}
			else
			{
				// echo(__('FILESYSTEM_ERROR_WARNFS_ERR01'));
			}
		}
		else
		{
			// echo(__('FILESYSTEM_ERROR_WARNFS_ERR02'));
		}

		return $ret;
	}

	/**
	 * Wrapper for the standard file_exists function
	 *
	 * @param   string  $file  File path
	 *
	 * @return  boolean  True if path is a file
	 *
	 */
	public static function exists($file)
	{
		return is_file(self::clean($file));
	}

	/**
	 * Returns the name, without any path.
	 *
	 * @param   string  $file  File path
	 *
	 * @return  string  filename
	 *
	 */
	public static function getName($file)
	{
		// Convert back slashes to forward slashes
		$file = str_replace('\\', '/', $file);
		$slash = strrpos($file, '/');

		if ($slash !== false)
		{
			return substr($file, $slash + 1);
		}
		else
		{
			return $file;
		}
	}
}
