@extends('layouts.mainadm')

@section('container')
<body class="email-chimp ">
<div class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12 mb-3">
             <div class="d-flex flex-wrap align-items-top justify-content-between">
                <div class="iq-members">
                   <h2 class="mb-2">Pesanan</h2>
                   <p class="pb-3">It powers your email contacts, and it rears its head in your system by letting you segment them.
                   </p>
                </div>
                <!-- <div class="mt-0">
                   <div class="form-group mb-0">
                      <select name="type" class="selectpicker" data-style="py-0">
                         <option>Manage Contacts</option>
                         <option>Create segment</option>
                         <option>Create list</option>
                         <option>Upload contacts</option>
                         <option>Add contact</option>
                         <option>Export history</option>
                      </select>
                   </div>
                </div> -->
             </div>
    
             
          </div>
          <div class="col-lg-8 col-md-8">
             <ul class="d-flex nav nav-pills text-center" id="pills-tab"
                role="tablist">
                <li class="nav-item">
                   <a class="nav-link btn btn-outline-primary active show" data-toggle="pill" href="#pills-1" role="tab" aria-selected="true">Info</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pills-2" role="tab" aria-selected="false">Masuk</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pills-3" data-hide="#view-event" role="tab" aria-selected="false">Selesai</a>
                </li>
             </ul>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12">
             <div class="tab-content">
                <div id="pills-1" class="tab-pane fade active show">
                   <div class="row">
                      <div class="col-lg-6 col-sm-12">
                         <div class="card">
                            <div class="card-body pb-0">
                               <div class="header-title">
                                  <h4 class="card-title">Informasi Produk</h4>
                               </div>
                               <div id="apex-bar-contact"></div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card contact-box">
                            <div class="card-body">
                               <div class="d-flex align-items-center">
                                  <img src="../assets/images/icon/01.png" class="img-fluid avatar-60" alt="image">
                                  <div class="content-box">
                                     <h2>220</h2>
                                     <p class="mb-0">Total Contacts</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="card contact-box">
                            <div class="card-body">
                               <div class="d-flex align-items-center">
                                  <img src="../assets/images/icon/02.png" class="img-fluid avatar-60" alt="image">
                                  <div class="content-box">
                                     <h2>150</h2>
                                     <p class="mb-0">Avail. Contacts</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="card contact-box">
                            <div class="card-body">
                               <div class="d-flex align-items-center">
                                  <img src="../assets/images/icon/03.png" class="img-fluid avatar-60" alt="image">
                                  <div class="content-box">
                                     <h2>0.00%</h2>
                                     <p class="mb-0">Avg. open rate</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="card contact-box">
                            <div class="card-body">
                               <div class="d-flex align-items-center">
                                  <img src="../assets/images/icon/04.png" class="img-fluid avatar-60" alt="image">
                                  <div class="content-box">
                                     <h2>500</h2>
                                     <p class="mb-0">Email sent</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card contact-box">
                            <div class="card-body">
                               <div class="d-flex align-items-center">
                                  <img src="../assets/images/icon/04.png" class="img-fluid avatar-60" alt="image">
                                  <div class="content-box">
                                     <h2>500</h2>
                                     <p class="mb-0">Email sent</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="card contact-box">
                            <div class="card-body">
                               <div class="d-flex align-items-center">
                                  <img src="../assets/images/icon/05.png" class="img-fluid avatar-60" alt="image">
                                  <div class="content-box">
                                     <h2>50</h2>
                                     <p class="mb-0">New contacts</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="card contact-box">
                            <div class="card-body">
                               <div class="d-flex align-items-center">
                                  <img src="../assets/images/icon/06.png" class="img-fluid avatar-60" alt="image">
                                  <div class="content-box">
                                     <h2>0.00%</h2>
                                     <p class="mb-0">Avg. click rate</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="card contact-box">
                            <div class="card-body">
                               <div class="d-flex align-items-center">
                                  <img src="../assets/images/icon/01.png" class="img-fluid avatar-60" alt="image">
                                  <div class="content-box">
                                     <h2>200</h2>
                                     <p class="mb-0">Total Contacts</p>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                
                <!-- pills-2 -->
                <div id="pills-2" class="tab-pane fade">
                   <div class="row">
                      <div class="col-sm-12 ">
                         <table class="table table-hover">
                            <thead>
                               <tr>
                                  <th class="text-center" scope="col">
                                     <span>Gambar</span>
                                  </th>
                                  <th class="text-center" scope="col">
                                     <span>Pemesan</span>
                                  </th>
                                  <th class="text-center" scope="col">
                                     <span>Kontak</span>
                                  </th>
                                  <th class="text-center" scope="col">
                                     <span>Produk</span>
                                  </th>
                                  <th class="text-center" scope="col">
                                     <span>Harga</span>
                                  </th>
                                  <th class="text-center" scope="col" colspan="3" class="text-center" >
                                     <span>Bukti</span>
                                  </th>
                               </tr>
                            </thead>
                            <tbody class="text-center" >
                               <tr>
                                  <td>
                                     <img src="../assets/images/options/01.png" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                                  </td>
                                  <td>Krisna</td>
                                  <td>082288209985</td>
                                  <td>
                                     <h6 class="mb-2">Mobil Listrik</h6>
                                     <span>Kendaraan</span>
                                  </td>
                                  <td> Rp. 1.000.000</td>
                                  <td><button type="button" class="btn btn-primary ">Bukti</button></td>
                                  <td><button type="button" class="btn btn-primary">Selesai</button></td>
                               </tr>
                            </tbody>
                         </table>
                      </div>
                   </div>
                </div>
    
    
                <!-- pills-3 -->
                <div id="pills-3" class="tab-pane fade">
                   <div class="row">
                      <div class="col-sm-12 ">
                         <table class="table table-hover">
                            <thead>
                               <tr>
                                  <th class="text-center" scope="col">
                                     <span>Gambar</span>
                                  </th>
                                  <th class="text-center" scope="col">
                                     <span>Pemesan</span>
                                  </th>
                                  <th class="text-center" scope="col">
                                     <span>Kontak</span>
                                  </th>
                                  <th class="text-center" scope="col">
                                     <span>Produk</span>
                                  </th>
                                  <th class="text-center" scope="col">
                                     <span>Harga</span>
                                  </th>
                                  <th class="text-center" scope="col">
                                     <span>Kirim</span>
                                  </th>
                                  <th class="text-center" scope="col" class="text-center" >
                                     <span>Status Dana</span>
                                  </th>
                               </tr>
                            </thead>
                            <tbody class="text-center" >
                               <tr>
                                  <td>
                                     <img src="../assets/images/options/01.png" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                                  </td>
                                  <td>Krisna</td>
                                  <td>082288209985</td>
                                  <td>
                                     <h6 class="mb-2">Mobil Listrik</h6>
                                     <span>Kendaraan</span>
                                  </td>
                                  <td> Rp. 1.000.000</td>
                                  <td>03 Dec , 2020</td>
                                  <td><a href="#" class="bg-warning-light badge">Masuk</a></td>
                               </tr>
                            </tbody>
                         </table>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
</body>
@endsection