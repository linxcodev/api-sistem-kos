<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Owner - Dashboard</title>

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png')}}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/gritter/css/jquery.gritter.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <script src="{{ asset('lib/chart-master/Chart.js') }}"></script>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right"></div>
      </div>
      <!--logo start-->
      <a href="" class="logo"><b>OWNER<span>DS</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="{{ asset('img/ui-zac.jpg') }}"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="{{ asset('img/ui-divya.jpg') }}"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="{{ asset('img/ui-danro.jpg') }}"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="{{ asset('img/ui-sherman.jpg') }}"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            Logout
          </a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
            {{ csrf_field() }}
          </form>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="{{ asset('img/ui-sam.jpg') }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{ Auth::user()->username }}</h5>
          <li class="mt">
            <a class="active" href="">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="mt">
            <a href="profile">
              <i class="fas fa-user"></i>
              <span>Profile</span>
              </a>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">General</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li>
            </ul>
          </li> -->

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       <h3><i class="fa fa-angle-right"></i> Dashboard</h3>
        <button type="button" id="tmbh" class="btn btn-theme pull-right" data-toggle="modal" data-target="#add">
          <i class="fa fa-plus"></i> Tambah
        </button>
        <!-- Modal Add-->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="formAdd">
                <div class="modal-body">
                  <div class="form-group">
                     @csrf
                     <label class="control-label">Nama Kos</label>
                     <input type="text" class="form-control" name="name">
                     <label class="control-label">Kota</label>
                     <input type="text" class="form-control" name="city">
                     <label class="control-label">Harga</label>
                     <input type="number" class="form-control" name="price">
                     <label class="control-label">Fasilitas Kamar</label>
                     <input type="text" class="form-control" name="fasilitas_kamar">
                     <label class="control-label">Luas Kamar</label>
                     <input type="number" class="form-control" name="luas_kamar">
                     <label class="control-label">Kamar Mandi</label>
                     <input type="text" class="form-control" name="kamar_mandi">
                     <label class="control-label">Fasilitas Umum</label>
                     <input type="text" class="form-control" name="fasilitas_umum">
                     <label class="control-label">Fasilitas Parkir</label>
                     <input type="text" class="form-control" name="fasilitas_parkir">
                     <label class="control-label">Description</label>
                     <textarea name="description" id="desc" class="form-control" rows="8" cols="80"></textarea>
                  </div>
                </div>
                <div class="modal-footer" id="mf"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <div class="wadah">
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Kota</th>
                        <th>Harga</th>
                        <th>Di sewa</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($owners as $owner)
                        <tr>
                          <td>{{$owner->name}}</td>
                          <td>{{$owner->city}}</td>
                          <td>{{$owner->price}}</td>
                          <td>{{$owner->user_id}}</td>
                          <td>
                            <button class="btn btn-success btn-xs" title="Detail">
                              <i class="fa fa-info"></i>
                            </button>
                            <button class="btn btn-primary btn-xs upd" data-id="{{$owner->id}}"
                               title="Edit" data-toggle="modal" data-target="#add">
                              <i class="fa fa-pencil"></i>
                            </button>
                            <button class="btn btn-danger btn-xs" title="Hapus">
                              <i class="fa fa-trash-o "></i>
                            </button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Powered by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>

  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/jquery.sparkline.js') }}"></script>
  <!--common script for all pages-->
  <script src="{{ asset('lib/common-scripts.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/gritter/js/jquery.gritter.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/gritter-conf.js') }}"></script>
  <!--script for this page-->
  <script src="{{ asset('lib/sparkline-chart.js') }}"></script>
  <script src="{{ asset('lib/zabuto_calendar.js') }}"></script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

  <script type="text/javascript">
    $('#tmbh').click(function() {
      $('#formAdd :input').val('')
      $('#mf').empty()
      $('#mf').append('<button type="button" class="btn" data-dismiss="modal">Close</button>')
      $('#mf').append('<button type="button" id="btnadd" class="btn btn-primary">Simpan</button>')
    })
    $('.upd').click(function() {
      var id  = $(this).attr('data-id')
      $('#idhd').remove()
      $('.form-group').append('<input type="hidden" id="idhd" value="'+id+'">')

      $.ajax({
        type: 'GET',
        url: "{{route('room.edit')}}",
        data: {id:id}
      }).done(function(data) {
        var data = $.extend(data[0], data[1][0]);

        Object.keys(data).forEach(function(key) {
          $("[name='"+key+"']").val(data[key]);
        })
      })

      $('#mf').empty()
      $('#mf').append('<button type="button" class="btn" data-dismiss="modal">Close</button>')
      $('#mf').append('<button type="button" id="btnupd" class="btn btn-primary">Update</button>')
    })
    $(document).on('click', '#btnadd', function() {
      var input = $('#formAdd :input')
      var values = {id: {{Auth::id()}} }

      input.each(function() {
        values[this.name] = $(this).val();
      });

      if (values.name.length == 0 || values.city.length == 0 || values.price.length == 0 || values.luas_kamar.length == 0 || values.description.length == 0) {
          var unique_id = $.gritter.add({
            text: 'Data Tidak Boleh Kosong !!!',
            sticky: true,
            class_name: 'my-sticky-class'
          })
      } else {
        $.ajax({
          type: 'POST',
          url: "{{route('room.store')}}",
          data: JSON.stringify(values)
        }).done(function(data) {
          window.location.reload();
        })
      }
    });
    $(document).on('click', '#btnupd', function() {
      var input = $('#formAdd :input')
      var id = $('#idhd').val()
      var values = {}

      input.each(function() {
        values[this.name] = $(this).val();
      });

      if (values.name.length == 0 || values.city.length == 0 || values.price.length == 0 || values.luas_kamar.length == 0 || values.description.length == 0) {
          var unique_id = $.gritter.add({
            text: 'Data Tidak Boleh Kosong !!!',
            sticky: true,
            class_name: 'my-sticky-class'
          })
      } else {
        $.ajax({
          type: 'PUT',
          url: "http://mamikos.test/api/rooms/"+id,
          data: JSON.stringify(values)
        }).done(function() {
          window.location.reload();
        })
      }
    });

    $('.modal').on('hidden.bs.modal', function () {
      $.gritter.removeAll();
    })
  </script>
</body>
</html>
