<?php

	function redirect()
	{
		exit(header("Location: ". $_SERVER["HTTP_REFERER"]));
	}

	function cleanHtmlCodes($cleanHtml)
	{
		$resCleanHtml = trim( strip_tags($cleanHtml) );
		return $resCleanHtml;
	}