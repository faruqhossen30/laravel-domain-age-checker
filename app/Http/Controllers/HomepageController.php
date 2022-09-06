<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\DomainAge;
use App\Lib\WhoisLocup;

class HomepageController extends Controller
{
    public function index()
    {
        $some = new DomainAge();
        $look = new WhoisLocup();

        // print_r($look->whoislookup('binarywebtools.com'));
        $whoisinfo = $look->whoislookup('domainagechecker.info');

        $rows = explode("\n", $whoisinfo);
        $arr = array('info' => "");
        foreach ($rows as $row) {
            $posOfFirstColon = strpos($row, ":");
            if ($posOfFirstColon === FALSE)
                $arr['info'] .= $row;
            else
                $arr[substr($row, 0, $posOfFirstColon)] = trim(substr($row, $posOfFirstColon + 1));
        }
        // echo "<pre>";
        // print_r($arr);
        // echo "</pre>";

        return view('frontend.homepage', compact('arr'));
    }
}
