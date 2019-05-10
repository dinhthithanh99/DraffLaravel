<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sunra\PhpSimple\HtmlDomParser;



class PageWEbController extends Controller
{
	public function showData(){

	}
    public function getData()
    {
	   $dom = HtmlDomParser::file_get_html('https://vnexpress.net');
	   $dom = HtmlDomParser::file_get_contents("https://vnexpress.net",true);
	   echo $dom;
    }
}
