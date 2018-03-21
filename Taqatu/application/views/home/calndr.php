<html>
<head>

    <!--link rel="stylesheet" href="<?php //echo base_url() ?>scripts/css/bootstrap-year-calendar.min.css" /-->
    <link rel="stylesheet" href="<?php echo base_url() ?>scripts/css/bootstrap-year-calendar.css" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="Bootstrap year calendar" />
    <meta name="description" content="The fully customizable year calendar widget, for bootstrap !" />
    <meta name="keywords" content="bootstrap, jquery, javascript, widget, calendar, year, component, library, framework, html, css, api" />
    <meta name="author" content="Paul DAVID-SIVELLE" />
</head>
<style>

    body
    {
        margin:0;
    }

    #banner
    {
        font-family:'Segoe UI','Helvetica Neue',Helvetica,Arial,sans-serif;

        overflow:auto;
    }

    #banner,
    #banner a,
    #banner a:hover,
    #banner a:active
    {

        text-decoration:none;
    }

    #banner .logo
    {
        font-size:18px;
        float:left;
        font-weight:100;
    }

    #banner .logo span.fa
    {
        font-size:26px;
        margin-right:10px;
        vertical-align: text-bottom;
    }

    #banner .menu
    {
        float:right;
    }

    #banner .menu-button
    {
        display:none;
        float:right;
    }

    #banner ul.menu {
        padding:0;
        margin:0;
    }

    #banner ul.menu  li
    {
        display:inline-block;
        list-style:none;
        padding:0 15px;
        cursor:pointer;
        font-size:14px;
        position:relative;
    }

    #banner ul.menu  li:hover
    {
        background-color:#2180C4;
    }

    #banner ul.menu  li.selected {
        box-shadow: inset 0 -3px 0 white;
    }

    #banner ul.menu  li span {
        margin-top: 21px;
        margin-bottom: 21px;
        font-size: 17px;
    }

    #title
    {
        background-color:#303030;
        height:200px;
        color:#ccc;
        text-align:center;
    }

    #main > .site-content > span.fa-spinner
    {
        font-size:60px;
        margin: 40px auto;
        display:block;
        width: 60px;
        height: 60px;
    }

    #main .site-content img {
        width:100%;
    }

    #footer
    {
        background-color:#E5E5E5;
        clear:both;
    }

    .site-content
    {
        width:800px;
        margin:auto;
    }

    #main > .site-content.full
    {
        padding-top:0;
        width:100%;
        display:table-row;
    }

    .left-menu {
        display:table-cell;
        background-color: #eee;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, .2);
        min-height:400px;
    }

    .site-content.full > .left-menu {
        border-left:0;
    }

    .left-menu ul {
        margin:0;
        padding:0;
        min-height: 200px;
    }

    .left-menu ul li {
        list-style: none;
        padding: 6px 25px 6px 15px;
        cursor: pointer;
        white-space:nowrap;
    }

    .left-menu ul li:hover {
        background-color:#ddd;
    }

    .left-menu ul li.selected {
        border-right:3px solid #aaa;
    }

    .sub-content-container
    {
        display:table-cell;
        padding-left:20px;
        width:100%;
    }

    .sub-content  > span.fa-spinner
    {
        font-size:40px;
        margin: 40px auto;
        display:block;
        width: 40px;
        height: 40px;
    }

    .center {
        text-align:center;
    }

    .underline-title {
        border-bottom:1px solid #ccc;
    }

    .new-version {
        display:inline-block;
        position: absolute;
        font-size: 12px;
        padding: 5px;
        background-color: green;
        color: white;
        border-radius: 4px;
        box-shadow: #222 0 0 10px;
        margin-top:20px;
        margin-left:5px;
    }

    .parameter,
    .default-value,
    .returns,
    .related-methods {
        font-size: 15px;
        font-family: consolas;
    }

    .parameter {
        color: #006696;
    }

    .default-value,
    .returns {
        color: #3C7202;
    }

    .related-methods {
        color:#7C0000;
    }

    span.link {
        font-family: consolas;
        font-size:13px;
        color: blue;
    }

    .parameter > ul > li{
        font-size: 12px;
    }

    code {
        display:block;
        margin:5px 0;
        padding: 12px;
    }

    code.inline {
        display:inline;
        padding: 0;
        background-color: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5
    {
        font-family:'Segoe UI','Helvetica Neue',Helvetica,Arial,sans-serif;

    }

    h1,
    h2
    {
        font-weight:100;
    }

    h1
    {
        padding: 30px 0 15px 0;
        margin: 0;
        font-size:60px;
        display:inline-block;
    }

    h4 {
        font-size:16px;
        font-weight:bold;
    }

    p {
        margin: 15px 0;
    }

    li {
        list-style-type:square;
    }

    hr {
        margin:20px 80px;
    }

    @media (min-width: 1024px) {
        .site-content
        {
            width:800px;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .site-content
        {
            width:650px;
        }

        #banner ul.menu  li
        {
            padding:0 7px;
        }

        #title {
            height:160px;
        }

        h1 {
            padding: 20px 0 10px 0;
            font-size:50px;
        }

        h2 {
            font-size:25px;
        }
    }


    @media (max-width: 768px) {
        .site-content
        {
            width:100%;
            min-width:200px;
            padding:0 5px;
        }

        #banner .menu-button
        {
            display:inline-block;
            cursor:pointer;
            font-size:21px;
            padding:18px;
        }

        #banner ul.menu  {
            display:none;
            float:none;
            clear:both;
            left:0;
        }

        #banner ul.menu  li {
            display:block;
            width:100%;
        }

        #banner ul.menu  li.selected {
            box-shadow: inset 3px 0 0 white;
        }

        #title {
            height:120px;
        }

        h1 {
            padding: 15px 0 0 0;
            font-size:30px;
        }

        h2 {
            font-size:17px;
        }

        .new-version {
            right:5px;
            margin-top: -10px;
        }
    }
    .days {
        margin: 0px 7px 0px 12px;
        padding: 0px;

    }
    .mnth{
        margin: 0 7px 0 0;
    }
    .yrs {
        padding: 0px;
    }
    .tst{
        margin: 10px 0px;
    }
    .tst1{
        margin: 5px 0px  7px;
    }
    span.slsh {
        margin: 0px 0px 0px -140px;
    }
    .bor {
        border: 1px solid white;
        border-radius: 8px;
        padding: 35px 15px;
        margin-bottom:20px;
    }
    .button input[type=submit] {
        cursor: pointer;
        padding: 0px 118px 0px 118px;
        background-color: white;
        border-radius: 10px;
    }
    input[type="submit"] {
        padding: 0 90px 0px 90px;
        background-color: white;
        border-radius: 10px;
    }
    .addev input[type="submit"] {
        padding: 0 100px 0 100px;
    }
    .addev {
        margin: 0px 0px 100px 0;
        clear:both;
    }
    .bord, .bord1, .bord2, .bord3 {
        border: 1px solid white;
        border-radius: 8px;
        background-color: white;
        margin: 0px 0px 12px 0px;
        float: left;
        width: 100%;
    }
    .total-day {
        border: 1px solid #a3abb1;
        background-color: #fae142;
        margin: 10px 0;
        padding: 7px 0px 4px 13px;
        border-radius: 5px;
    }
    span.day {
        padding: 0 0 0 188px;
        color: white;
    }
    i.glyphicon.glyphicon-remove {
        border: 1px solid gray;
        padding: 0px 0px 0px 0px;
        margin: 0 0 0px 8px;
        color: white;
        font-size: 10px;
        background-color: gray;
        border-radius: 2px;
    }
    h4.total {
        color: white;
        margin: 0 0 8px 11px;
    }
    .week {
        padding: 0 0 9px 10px;
    }
    .month td.day {
        background: #fff;
    }
    .res_btn input[type="submit"] {
        padding: 0 18px;
        width: 100%;
        border: 0;
        border-radius: 5px;
        line-height: 26px;
        font-size: 16px;
    }
    .modal-footer {
        clear: both;
    }
    .res_btn {
        width: 100%;
    }
    label.custom-checkbox input {
        width: 25px;
        height: 25px;
        float: left;
        margin: 0;
        opacity: 0;
    } 
	label.custom-checkbox1 input {
        width: 25px;
        height: 25px;
        float: left;
        margin: 0;
        opacity: 0;
    }
    label.custom-checkbox {
        position: relative;
        float: left;
    } 
	label.custom-checkbox1 {
        position: relative;
        float: left;
    }
    label.custom-checkbox1 input:checked+span {
        background: #8b8d90;
    }
	 label.custom-checkbox input:checked+span {
        background: #F5F500;
    }
    label.custom-checkbox input+span {
        width: 25px;
        height: 25px;
        position: absolute;
        top: 0;
        left: 0;
        border: 1px solid #fff;
        pointer-events: none;
        border-radius: 5px;
    }
	label.custom-checkbox1 input+span {
        width: 25px;
        height: 25px;
        position: absolute;
        top: 0;
        left: 0;
        border: 1px solid #ccc;
        pointer-events: none;
        border-radius: 5px;
    }
    label.custom-checkbox i {
        clear: both;
        float: left;
        color: #fff;
    }
	label.custom-checkbox1 i {
        clear: both;
        float: left;
        color: #fff;
    }
    label.custom-checkbox {
        position: relative;
        float: left;
        margin: 5px;
    }
	label.custom-checkbox1 {
        position: relative;
        float: left;
        margin: 5px;
    }
    .day.disabled div {
        cursor: no-drop !important;
    }
    [class*="bord"] label.custom-checkbox input+span {
        border: 1px solid #b7b7b7;
    }
    label.custom-checkbox b {
        display: inline-block;
        font-weight: normal;
        margin-top: 4px;
        padding-left: 5px;
        font-size: 11px;
    }
	label.custom-checkbox1 b {
        display: inline-block;
        font-weight: normal;
        margin-top: 4px;
        padding-left: 5px;
        font-size: 11px;
    }
    .tst1>div>a, .tst>div>a {
        float: right;
        padding: 6px 10px 0 0px;
    }
    .form-group .ui-front span input {
		width:29% !important;
        margin: 0;
        float: left;
        flex: none;
        max-width: initial;
        border: 1px solid #fff;
        border-radius: 3px;
        margin: 0 2px;
        line-height: 30px;
        background: transparent;
    }
    .form-group .ui-front span {
        float: left;
        width: 50%;
        margin: 0;
    }
	.day.disabled {
    background: #A9A9A9 !important;
}
label.custom-checkbox.chk input:checked+span {
    background: #a9a9a9;
}
.calendar table.month tr td, .calendar table.month tr th {
    padding: 0;
    margin: 2px !important;
    float: left;
    border-radius: 3px;
    line-height: 24px;
    text-align: center;
    font-size: 13px;
    height: 25px;
    width: 25px;
}
.calendar table.month tr td .day-content {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    padding: 0;
}
.calendar .month-container {
    text-align: center;
    height: 210px;
    margin-bottom: 30px;
    padding: 0;
}
.days{
    margin-bottom: 15px !important;
}
/************media query start here************/
@media (max-width: 1199px) {
.wrap {
  display: inline-block;
}
.form-group .ui-front span {
  width: 100%;
}
.form-group .ui-front span input {
  width: 31% !important;
  margin-bottom: 10px;
}
.wrap {
  padding-left: 15px;
  padding-right: 15px;
}
}
@media (max-width: 991px) {
.site-content {
  width: 100%;
}
.col-md-3 {
  max-width: 30%;
}
.col-md-9 {
  max-width: 70%;
}
}
@media (max-width: 900px) {
.col-md-3 {
  max-width: 35%;
}
.col-md-9 {
  max-width: 65%;
}
}
@media (max-width: 767px) {
.col-md-3 {
  max-width: 50%;
}
.col-md-9 {
  max-width: 50%;
}
.addev {
  clear: both;
  margin: 0 0 0px;
}
.upper-section .form-inline input {
  margin-right: 10px;
  width: 250px;
}
.upper-section button {
  position: relative;
  top: -8px;
}
}
@media (max-width: 540px) {
.col-md-3 {
  max-width: 100%;
}
.col-md-9 {
  max-width: 100%;
  margin-top: 30px;
}
.upper-section .form-inline input {
  margin-right: 10px;
  width: 180px;
}
header {
  position: inherit;

}
}
</style>
<body>

<div class="wrap">

    <div class="calendar-side col-md-3 col-xs-12">

        <div class="bor">
            <h4 class="total">Duration</h4>
            <form role="form" method="post" action="<?= base_url('home/add_event')?> ">
                <div class="form-group">

                    <div class="ui-front">
						<span>

						<input type="text" class="col-sm-1 days" name="from_day" placeholder="DD" />
						<input type="text" class="col-sm-1 days" name="from_month" placeholder="MM" />
						<input type="text" class="col-sm-2 yrs" name="from_year" placeholder="YYYY" />

						</span>
                        <!--input type="text" class="form-control" name="description" placeholder="Description"-->
                        <span class="slsh">
							<input type="text" class="col-sm-1 days" name="to_day" placeholder="DD" />
						<input type="text" class="col-sm-1 days" name="to_month" placeholder="MM" />
						<input type="text" class="col-sm-2 yrs" name="to_year" placeholder="YYYY" />
						<input type="hidden" class="form-control" name="pro_id" value="<?php echo $project_id; ?>" placeholder="Event Name">
                       </span>
                    </div>
                </div>

                <div class="button res_btn">
                    <input type="submit" name="Add_event"  value="Add">
                </div>
            </form>

            <div class="strt_ev">
                <div class="form-group">
                    <?php //print_r($event); die; ?>
                    <div class="tst">
                        <?php   foreach ($result as $stud) {

                            $time = strtotime($stud['start']);
                            $time2 = strtotime($stud['end']);
                            $newformat = date('Y-m-d',$time);
                            $newformat2 = date('Y-m-d',$time2);
                            //echo  $date=$stud['start'];
                            //echo $dd = date_format($date,"Y/m/d H:i:s");
                            if($event['cal_id']==$stud['ID']){

                                ?>
                                <div class="bord">
                                    <label class="custom-checkbox">
                                        <input type="radio"  name="event" value="<?php echo $stud['ID'];?>"  onclick = "change_status(this.value)" checked >
                                        <span></span>
                                        <b><?php echo $newformat; ?>- <?php echo $newformat2; ?></b>
                                    </label>
                                    <a href="<?php echo base_url();?>home/delete_event/<?php echo $stud['ID']; ?>/<?php echo $project_id; ?>"><i class='glyphicon glyphicon-remove'></i></a></div>
                            <?php } else { ?>
                                <div class="bord1">
                                    <label class="custom-checkbox">
                                        <input type="radio" name="event" value="<?php echo $stud['ID'];?>"  onclick = "change_status(this.value)" >
                                        <span></span>
                                        <b><?php echo $newformat; ?>- <?php echo $newformat2; ?></b>
                                    </label>
                                    <a href="<?php echo base_url();?>home/delete_event/<?php echo $stud['ID']; ?>/<?php echo $project_id; ?>"><i class='glyphicon glyphicon-remove'></i></a></div>
                            <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="excl_ev">
                <h4 class="total">Excluded Periods</h4>

                <form role="form" method="post" action="<?= base_url('home/add_excluded')?> ">



                    <div class="form-group">
                        <div class="ui-front">
						<span>
						<input type="text" class="col-sm-1 days" name="from_exday" placeholder="DD" />
						<input type="text" class="col-sm-1 days" name="from_exmonth" placeholder="MM" />
						<input type="text" class="col-sm-2 yrs" name="from_exyear" placeholder="YYYY" />
                            <!--input type="text" class="form-control" name="description" placeholder="Description"-->
						</span>
                            <span class="slsh">
						<input type="text" class="col-sm-1 days" name="to_exday" placeholder="DD" />
						<input type="text" class="col-sm-1 days" name="to_exmonth" placeholder="MM" />
						<input type="text" class="col-sm-2 yrs" name="to_exyear"  placeholder="YYYY" />-
						</span>
                        </div>
                    </div>
                    <input type="hidden"  name="pid" id="pid" value="<?php echo $project_id;?>"/>
                    <div class="addex res_btn">
                        <input type="submit"  name="Add_event"  value="Add Excluded">
                    </div>
                </form>
            </div>

            <div class="exc">
                <div class="form-group">
                    <?php
                    // print_r($event['exclu_id']);
                    //  print_r($excluded);
                    ?>
                    <div class="tst1">
                        <?php   foreach ($excluded as $stud) {
                            $time = strtotime($stud['excluded_start']);
                            $time2 = strtotime($stud['excluded_end']);
                            $newformat = date('Y-m-d',$time);
                            $newformat2 = date('Y-m-d',$time2);
                            if($event['exclu_id']==$stud['id']){

                                ?>
                                <div class="bord2">
                                    <label class="custom-checkbox1">
                                        <input type="radio" name="event_exc" value="<?php echo $stud['id'];?>"  onclick ="change_excluded_status(this.value)" checked >
                                        <span></span>
                                        <b><?php echo $newformat; ?>- <?php echo $newformat2; ?></b>
                                    </label>
                                    <a href="<?php echo base_url();?>home/delete_event_excluded/<?php echo $stud['id']; ?>/<?php echo $project_id; ?>"><i class='glyphicon glyphicon-remove'></i></a></div>
                            <?php } else { ?>
                                <div class="bord3">
                                    <label class="custom-checkbox1">
                                        <input type="radio" name="event_exc" value="<?php echo $stud['id'];?>"  onclick = "change_excluded_status(this.value)" >
                                        <span></span>
                                        <b><?php echo $newformat; ?>- <?php echo $newformat2; ?></b>
                                    </label>
                                    <a href="<?php echo base_url();?>home/delete_event_excluded/<?php echo $stud['id']; ?>/<?php echo $project_id; ?>"><i class='glyphicon glyphicon-remove'></i></a></div>
                            <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="dy_off">
                <div class="form-group">
                     <form role="form" method="post" action="<?= base_url('home/add_excl_days')?> ">

                        <div class="tst1">
                            <input type="hidden" name="pr_id" value="<?php echo $project_id;?>"  />
                        </div>
						<?php  $WFree= $event['days_off'];
								$WF = json_decode($WFree);
					
						?>
 

                        <div class="week">
                            <label class="custom-checkbox chk">
                                <input type="checkbox" name="chck[]" value="0" <?php if (in_array(0,$WF)){ echo "checked"; }?> />
                                <span></span>
                                <i>SU</i>
								 <input type="hidden" name="day_name" value="sunday"  />
                            </label>
                            <label class="custom-checkbox chk">
                          <input type="checkbox" name="chck[]" value="1" <?php if (in_array(1,$WF)){ echo "checked"; }?> />
                                <span></span>
                                <i>MO</i>
								 <input type="hidden" name="day_name" value="monday"  />
                            </label>
                            <label class="custom-checkbox chk">
                          <input type="checkbox" name="chck[]" value="2" <?php if (in_array(2,$WF)){ echo "checked"; }?> />
                                <span></span>
                                <i>TU</i>
								 <input type="hidden" name="day_name" value="tues"  />
                            </label>
                            <label class="custom-checkbox chk">
                            <input type="checkbox" name="chck[]" value="3" <?php if (in_array(3,$WF)){ echo "checked"; }?>/>
                                <span></span>
                                <i>WE</i>
								 <input type="hidden" name="day_name" value="wed"  />
                            </label>
                            <label class="custom-checkbox chk">
                             <input type="checkbox" name="chck[]" value="4" <?php if (in_array(4,$WF)){ echo "checked"; }?>/>
                                <span></span>
                                <i>TH</i>
								 <input type="hidden" name="day_name" value="thurs"  />
                            </label>
                            <label class="custom-checkbox chk">
                          <input type="checkbox" name="chck[]" value="5" <?php if (in_array(5,$WF)){ echo "checked"; }?>/>
                                <span></span>
                                <i>FR</i>
								 <input type="hidden" name="day_name" value="fri"  />
                            </label>
                            <label class="custom-checkbox chk">
                         <input type="checkbox" name="chck[]" value="6" <?php if (in_array(6,$WF)){ echo "checked"; }?>/>
                                <span></span>
                                <i>ST</i>
								 <input type="hidden" name="day_name" value="sat"  />
                            </label>
                        </div>
							
					 <div class="addex res_btn">
                        <input type="submit"  name="Add_Days"  value="Add Days">
                    </div>

                    </form>
                </div>
            </div>

            <div class="addev">

                <h4 class="total">Total # Work Days</h4>
				<input type="hidden" name="len" id="len" value="" />
                <div class ="total-day">
                    <?php $time=strtotime($event['start']);
                    $month=date("F",$time);
                    $time1=strtotime($event['excluded_start']);
                    $month1=date("F",$time1);
                    $st = new DateTime($event['start']);
                    $ed = new DateTime($event['end']);
					
                    $dteDiff = $st->diff($ed);
                    $work = ($dteDiff->days)+1;
					
                    if($month == $month1){
						
						$net_work = @$event['total_day'] - @$event['day_cnt'];
						
                        echo @$net_work ;
						
                      	}  else {
							
								
							$net_work = $work - @$event['day_cnt'];
								echo $net_work;
								
								?>
                      

                    <?php }  ?>
  <span class="day1">Days</span>


                </div>
            </div>


        </div>


    </div>
    <div id="banner" class="col-md-9 col-xs-12 ">
        <div class="site-content">
            <div id="calendar"></div>
        </div>
    </div>
</div>


</div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<!--script src="<?php //echo base_url(); ?>scripts/js/bootstrap-year-calendar.min.js"></script-->
<script src="<?php echo base_url(); ?>scripts/js/bootstrap-popover.js"></script>
<script src="<?php echo base_url(); ?>scripts/js/bootstrap-year-calendar.js"></script>



<script>
    // function save_val(va,val) {
       // alert(val);
        // $.ajax({
            // url: "<?php echo base_url();?>home/excl_day/<?php echo $project_id; ?>",
            // type: "POST",
			 // data:{
				// option: va,
				// option2: val
				
    // },
        // }).done(function(respond){
			// alert(respond);
            // window.location.href= "<?php echo base_url();?>home/duration/"+$.trim(respond);

        // });
    // }
    function change_status(val)  {
        var radio1=val;
        //var radio1=$('input[type="radio"]:checked').val();
        //alert(radio1);
        $.ajax({
            url : "<?php echo base_url() ?>home/change_status",
            type : "POST",
            data : {'ID' : radio1 },
            success : function(data) {
                //alert(data);
                window.location.href= "<?php echo base_url();?>home/duration/"+$.trim(data);
                //window.location.href= "http://basicsoftwaresolution.com/Taqatu/home/duration/11";
            }
        });
        return false;
    }
    function change_excluded_status(val)  {
        //alert(val);
        var radio1= val;
        // var radio1=$('input[type="radio"]:checked').val();
        //alert(radio1);
        $.ajax({
            url : "<?php echo base_url() ?>home/change_excluded",
            type : "POST",
            data : {'ID' : radio1 },
            success : function(data) {
                //alert(data);
                window.location.href= "<?php echo base_url();?>home/duration/"+$.trim(data);
                //window.location.href= "http://basicsoftwaresolution.com/Taqatu/home/duration/11";
            }
        });
        return false;
    }
    function excl_day(val)  {
        var radio1= val;
        $.ajax({
            url : "<?php echo base_url() ?>home/change_excluded",
            type : "POST",
            data : {'ID' : radio1 },
            success : function(data) {

                window.location.href= "<?php echo base_url();?>home/duration/"+$.trim(data);

            }
        });
        return false;
    }

    $(function () {

        var currentYear = new Date().getFullYear();
        var redDateTime = new Date(currentYear, 2, 13).getTime();
        var circleDateTime = new Date(currentYear, 1, 20).getTime();
        var borderDateTime = new Date(currentYear, 0, 12).getTime();
        var return_first = function () {
            var dataevents = null;
            $.ajax({
                'async': false,
                'type': "POST",
                'global': false,
                'dataType': 'JSON',
                'url': "<?php echo base_url() ?>home/get_events/<?php echo $project_id; ?>",
                'success': function (data) {
                    var data1 = [];
                    
                    $.each(data, function (index, value) {
                        data1.push({
                            id: value.id,
                            name: value.name,
                            type: value.type,
                            startDate: new Date(value.startDate.replace(/-/g, "/")),
                            endDate: new Date(value.endDate.replace(/-/g, "/")),
                            color: value.color,

                        });



                    });
                    function getdata() {
                        var myData= [];
                        $.ajax({
                            async: false,
                            global: false,
                            url: '<?php echo base_url() ?>home/get_offday/<?php echo $project_id; ?>',
                            success: function (response) {
								//alert(response);
                                myData = response;
								
                            }
                        });
                         return myData;
                    }
					

 var newarray1=JSON.parse(getdata());
	var test=newarray1.new;
	var month= newarray1.m;
	var year= newarray1.y;
	
	var features=[];
	$.each(test,function(index, value){
		 features.push(new Date(year[index],month[index],value));
		 
	});
	var arr=features.join( "," );
                    $('#calendar').calendar({
                        style:'background',
						startYear: year,
                        dataSource: data1,
						  disabledDays: features,  
					  });
					
                }
            });
        }();
		
		
    });
</script>
<script>
    jQuery(document).ready(function ($) {

        $('.nav-menus li a:not([href^="http"])').click(function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            $(this).next('ul').show();
        });
        $('.toggle-btn').click(function () {
            $(this).toggleClass('active');
            $('#nav_bar').toggleClass('active');
            $('.wrap').toggleClass('collapser');
        });
        $('.serch-section i').click(function () {
            $('.search-card').addClass('active');
        });
        $('.card-close').click(function () {
            $('.search-card').removeClass('active');
        });
        $('[data-section]').click(function (e) {
            e.preventDefault();
            var section = $(this).data('section');
            $('.login-content,.post-content,.register-content').removeClass('active');
            $(section).addClass('active');
        });
    });</script>

<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });

    });
</script>


</html>