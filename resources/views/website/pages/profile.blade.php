@extends('website.layouts.default')
@section('content')

</body>
<!-- Student Profile -->

<style type="text/css">
.body {
  padding: 0;
  margin: 0;
  font-family: 'Lato', sans-serif;
  color: #000;
}

.student-profile .card {
  border-radius: 10px;
}

.student-profile .card .card-header .profile_img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  margin: 10px auto;
  border: 10px solid #ccc;
  border-radius: 50%;
}

.student-profile .card h3 {
  font-size: 20px;
  font-weight: 700;
}

.student-profile .card p {
  font-size: 16px;
  color: #000;
}

.student-profile .table th,
.student-profile .table td {
  font-size: 14px;
  padding: 5px 10px;
  color: #000;
}
</style>

<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-left">
            <img class="profile_img" style="padding: 5px" src="https://placeimg.com/640/480/arch/any" alt="">
            <h3>Hossain Tariq</h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong>1703210201346</p>
            <p class="mb-0"><strong class="pr-1">Email:</strong>rjtushar95@gmail.com</p>
            <p class="mb-0"><strong class="pr-1">Date of Birth	:</strong>17.12.1997</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">

              <tr>
                <th width="30%">Semester</th>
                <td width="2%">:</td>
                <td>6</td>
              </tr>
              <tr>
                <th width="30%">Batch</th>
                <td width="2%">:</td>
                <td>32</td>
              </tr>
              <tr>
                <th width="30%">Contact</th>
                <td width="2%">:</td>
                <td>01533081037</td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td>Male</td>
              </tr>
              <tr>
                <th width="30%">Adviser</th>
                <td width="2%">:</td>
                <td>Md. Ashiq Kamal</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Student Profile -->
@stop