<?php

require_once "../app/site/model/Texts.php";

class Blog
{
	static function Latest($data, $args)
	{
		include "../app/site/views/header.html";
		echo "<h1>Blog</h1>";
		for($i = 1; $i < 11; $i ++) echo "- <a href=\"/blog/$i\">Entry #$i</a><br/>";
	}

	static function Entry($data, $args)
	{
		echo "<h2>Entry #{$args['id']}</h2>";
		echo Texts::randomParagraph();
	}

	static function Comments($data, $args)
	{
		echo "<h2>Comments of entry #{$args['id']}</h2>";
	}
}