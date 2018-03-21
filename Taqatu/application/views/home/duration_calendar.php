<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Calendar Display</title>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.css" />
        <script src="<?php echo base_url(); ?>scripts/lib/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>scripts/fullcalendar/fullcalendar.min.js"></script>
        <script src="<?php echo base_url(); ?>scripts/fullcalendar/gcal.js"></script>
        <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

    </head>
    <body>
        <div class="wrap">
            <div class="calendar-side col-sm-3 col-xs-12">
                <form role="form" method="post" action="<?= base_url('home/add_event')?> ">
                   
                    <div class="form-group">
                        <div class="ui-front">
						<input type="text" class="col-sm-2" name="day"/>
						<input type="text" class="col-sm-2" name="month"/>
						<input type="text" class="col-sm-3" name="year"/>
                            <input type="text" class="form-control" name="description" placeholder="Description">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <div class="input-group date" id="datetimepicker6">
                                <input type="text" class="form-control" name="start_date" placeholder="Start Date"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            
                            <div class="input-group date" id="datetimepicker7">
                                <input type="text" class="form-control" name="end_date" placeholder="End Date"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Add Event">

                    </div>
                </form>
				<h5>Excluded Periods</h5>
				<form role="form" method="post" action="<?= base_url('home/add_excluded')?> ">
                   
                   
                    <div class="form-group">
                        <div class="">
                            <div class="input-group date" id="datetimepicker10">
                                <input type="text" class="form-control" name="start_date" placeholder="Start Date"/>
								   
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            
                            <div class="input-group date" id="datetimepicker11">
                                <input type="text" class="form-control" name="end_date" placeholder="End Date">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
			<input type="hidden"  name="project_pid" value="<?php echo $project_id;?>"/>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Add Excluded">

                    </div>
                </form>
				<h5>Total Working Days</h5>
				<div><?php echo @$result['total_day'];?></div>
            </div>
            <div class="col-xs-12 col-sm-9">
                
                <div id="calendar"></div>
            </div>

           

            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title" id="myModalLabel">Update Calendar Event</h4>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" action="<?php echo base_url(); ?>home/edit_event">
                                <div class="form-group">
                                    <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                                    <div class="col-md-8 ui-front">
                                        <input type="text" class="form-control" name="name" value="" id="name">
										  <input type="hidden" class="form-control" name="pro_id" value="<?php echo $project_id; ?>" placeholder="Event Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="p-in" class="col-md-4 label-heading">Description</label>
                                    <div class="col-md-8 ui-front">
                                        <input type="text" class="form-control" name="description" id="description">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                                    <div class="col-md-8">
                                        <div class='input-group date' id='datetimepicker8'>
                                            <input type='text' class="form-control" name="start_date" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="p-in" class="col-md-4 label-heading">End Date</label>
                                    <div class="col-md-8">
                                        <div class='input-group date' id='datetimepicker9'>
                                            <input type='text' class="form-control" name="end_date" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
								<input type="hidden" id="day" value="5"/>
                                <div class="form-group">
                                    <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="delete" value="1">
                                    </div>
                                </div>
                                <input type="hidden" name="eventid" id="event_id" value="0" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Update Event">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker6').datetimepicker({

                    format: 'YYYY-MM-DD HH:mm:ss'
                });
            });
            $(function () {
                $('#datetimepicker7').datetimepicker({

                    format: 'YYYY-MM-DD HH:mm:ss'
                });
            });
            $(function () {
                $('#datetimepicker8').datetimepicker({

                    format: 'YYYY-MM-DD HH:mm:ss'
                });
            });
            $(function () {
                $('#datetimepicker9').datetimepicker({

                    format: 'YYYY-MM-DD HH:mm:ss'
                });
            });
			$(function () {
                $('#datetimepicker10').datetimepicker({

                    format: 'YYYY-MM-DD HH:mm:ss'
                });
            });
			$(function () {
                $('#datetimepicker11').datetimepicker({

                    format: 'YYYY-MM-DD HH:mm:ss'
                });
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function () {
            
                var date_last_clicked = null;
				var pro_id = $("#pro_id").val();
				//alert(pro_id);
                $('#calendar').fullCalendar({
					
					
					
                    eventSources: [
                        {
                            events: function (start, end, timezone, callback) {
                                $.ajax({
                                    url: '<?php echo base_url() ?>home/get_events/<?php echo $project_id; ?>',
                                    dataType: 'json',
                                    data: {
                                        // our hypothetical feed requires UNIX timestamps
                                        start: start.unix(),
                                        end: end.unix()
                                    },
                                    success: function (msg) {
										//alert(msg);
                                        var events = msg.events;
                                 
                                   
                                        callback(events);
                                    }
                                });
                           
                           
                        },
						
                         color: 'yellow',
						
                        },
           
					{
						events: 
				
							
							 function (excluded_start, excluded_end, timezone, callback) {
                                $.ajax({
                                    url: '<?php echo base_url() ?>home/get_excluded/<?php echo $project_id; ?>',
                                    dataType: 'json',
                                    data: {
                                        // our hypothetical feed requires UNIX timestamps
                                        start: excluded_start.unix(),
                                        end: excluded_end.unix()
                                    },
                                    success: function (msg) {
					
                                        var events = msg.excluded;
                                 
                                   
                                        callback(events);
                                    }
                                });
                           
                           
                        },
               
 
						
						
						
					
					
						color: 'red',
        textColor: 'white'
		}
		],
						
                    /*  eventSources: [
                        {
                            events: function (excluded_start, excluded_end, timezone, callback) {
                                $.ajax({
                                    url: '<?php echo base_url() ?>home/get_excluded',
                                    dataType: 'json',
                                    data: {
                                        // our hypothetical feed requires UNIX timestamps
                                        start: excluded_start.unix(),
                                        end: excluded_end.unix()
                                    },
                                    success: function (msg) {
					
                                        var events = msg.excluded;
                                 
                                   
                                        callback(events);
                                    }
                                });
                           
                           
                        },
						
                       color: 'red', 
						
                        }
                    ], */
                    dayClick: function (date, jsEvent, view) {
                       /*  date_last_clicked = $(this);
                        $(this).css('background-color', '#bed7f3');
                        $('#addModal').modal(); */
                    },
                  /*   eventClick: function (event, jsEvent, view) {
                        $('#name').val(event.title);
                        $('#description').val(event.description);
                        $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
                        if (event.end) {
                            $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
                        } else {
                            $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
                        }
                        $('#event_id').val(event.id);
                        $('#editModal').modal();
                    }, */
				/* dayRender: function (date, cell) {
    var today = moment('2018-01-04T00:00Z');
    if (date.isSame(today, "day")) {
      cell.css("background-color", "red");
    }
  }, */
                });
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
			
            });
			
        </script>

        <script>
            $(document).ready(function () {
                $('.dropdown-submenu a.test').on("click", function (e) {
                    $(this).next('ul').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
        </script>
    </body>
</html>