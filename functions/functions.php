<?php

	function print_arr($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}

	function redirect()
	{
		header("Location: ". $_SERVER["HTTP_REFERER"]);
		exit;
	}

	function cleanHtmlCodes($cleanHtml)
	{
		$resCleanHtml = trim( strip_tags($cleanHtml) );
		return $resCleanHtml;
	}