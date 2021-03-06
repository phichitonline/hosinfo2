<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $replist = DB::connection('mysql')->select('SELECT r.*,c.rep_cat AS rep_cat_name FROM rep_reports r LEFT OUTER JOIN sys_rep_cat c ON c.id = r.rep_cat WHERE r.rep_status = "1"');

        return view('reports.index', [
            'controller_name' => "รายงาน End User",
            'active_menu_report' => "active",
            'replist' => $replist,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showreport(Request $request, $repid = NULL)
    {

        $date1d = substr($request->dateselect,3,2);
        $date1m = substr($request->dateselect,0,2);
        $date1y = substr($request->dateselect,6,4);
        $date2d = substr($request->dateselect,16,2);
        $date2m = substr($request->dateselect,13,2);
        $date2y = substr($request->dateselect,19,4);
        $fulldate_start = $date1y."-".$date1m."-".$date1d;
        $fulldate_end = $date2y."-".$date2m."-".$date2d;
        // $fulldate_start = "2021-01-01";
        // $fulldate_end = "2021-01-15";

        $rep_selected = DB::connection('mysql')->select('SELECT r.*,c.rep_cat AS rep_cat_name FROM rep_reports r LEFT OUTER JOIN sys_rep_cat c ON c.id = r.rep_cat WHERE r.rep_status = "1" AND r.repid = "'.$repid.'" ');
        foreach($rep_selected as $data){
            $repid = $data->repid;
            $rep_name = $data->rep_name;
            $rep_column = $data->rep_column;
            $rep_sql1 = $data->rep_sql1;
            $rep_where_fdatename = $data->rep_where_fdatename;
            $rep_where = $data->rep_where;
            $rep_groupby = $data->rep_groupby;
            $rep_where_selecter = $data->rep_where_selecter;
        }

        if ($rep_where_fdatename == "") {
            $wheresql = ' ';
            $wheresqland1 = ' WHERE '.$rep_where.' ';
        } else {
            $wheresql = ' WHERE '.$rep_where_fdatename.' BETWEEN "'.$fulldate_start.'" AND "'.$fulldate_end.'" ';
            $wheresqland1 = " AND ".$rep_where.' ';
        }

        if ($rep_where == "") {
            $wheresqland = ' ';
        } else {
            $wheresqland = ' '.$wheresqland1.' ';
        }

        if ($rep_groupby == "") {
            $groupsql = ' ';
        } else {
            $groupsql = ' GROUP BY '.$rep_groupby.' ';
        }

        $rep_detail = DB::connection('mysql_hos')->select($rep_sql1.$wheresql.$wheresqland.$groupsql);
        foreach($rep_selected as $data){
            $rep_sql_array = $data->repid;
        }

        return view('reports.reports', [
            'controller_name' => "รายงาน End User",
            'active_menu_report' => "active",
            'rep_selected' => $rep_selected,
            'rep_name' => $rep_name,
            'rep_column' => $rep_column,
            'rep_detail' => $rep_detail,
            'rep_sql_array' => $rep_sql_array,
            'fulldate_start' => $fulldate_start,
            'fulldate_end' => $fulldate_end,
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
