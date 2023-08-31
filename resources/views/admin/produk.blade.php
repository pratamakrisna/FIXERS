@extends('layouts.mainadm')

@section('container')
  
<body class="email-chimp">

<div class="content-page">
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 mb-3">
         <div class="d-flex flex-wrap align-items-top justify-content-between">
            <div class="iq-members">
               <h2 class="mb-2">Produk</h2>
               <p class="pb-3">Send kickback emails from lead offers, thank you
                  emails after purchase, or just promote current campaigns. 
               </p>
            </div>
            <div class="mt-0">
               <!-- Large modal -->
               <a class="btn btn-lg btn-outline-primary" data-toggle="modal" data-target="#tambahproduk">Tambah Produk</a>
            </div>
         </div>
      </div>
      <div class="col-lg-8 col-md-7">
         <ul class="d-flex nav nav-pills text-center event-tab" id="event-pills-tab" role="tablist">
            <li class="nav-item">
               <a id="view-btn" class="nav-link btn btn-lg btn-outline-primary active show" data-toggle="pill" href="#event1" role="tab" aria-selected="true">Semua Produk</a>
            </li>
            <li class="nav-item">
               <a id="view-workflow" class="nav-link btn btn-outline-primary" data-toggle="pill" href="#event2" data-hide="#view-event" role="tab" aria-selected="false">Produk Info</a>
            </li>
         </ul>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="event-content">
            <div id="event1" class="tab-pane fade active show">
               <div class="row">
                  <div class="col-sm-12">
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center">
                                 <span>Gambar</span>
                              </th>
                              <th scope="col" class="text-center">
                                 <span>Nama Produk</span>
                              </th>
                              <th scope="col" class="text-center">
                                 <span>Harga</span>
                              </th>
                              <th scope="col" class="text-center">
                                 <span>Jumlah</span>
                              </th>
                              <th scope="col" class="text-center">
                                 <span>Tanggal Upload</span>
                              </th>
                              <th scope="col" colspan="2" class="text-center">
                                 <span>Info</span>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="text-center" >
                              <td>
                                 <img src="../assets/images/options/01.png" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Mobil Listrik</h6>
                                 <span>IOT</span>
                              </td>
                              <td>1.000.000</td>
                              <td>100</td>
                              <td>03 Dec , 2020</td>
                              <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton15" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton15" style="">
                                       <a class="dropdown-item" href="#">Edit Produk</a>
                                       <a class="dropdown-item" href="#">Lihat Produk</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>

            <div id="event2" class="tab-pane fade">
               <div class="row">
                  <div class="col-sm-12">
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col" class="text-center">
                                 <span>Gambar</span>
                              </th>
                              <th scope="col" class="text-center">
                                 <span>Nama Produk</span>
                              </th>
                              <th scope="col" class="text-center">
                                 <span>Harga</span>
                              </th>
                              <th scope="col" class="text-center">
                                 <span>Jumlah</span>
                              </th>
                              <th scope="col" class="text-center">
                                 <span>Tanggal Upload</span>
                              </th>
                              <th scope="col" colspan="" class="text-center">
                                 <span>Info</span>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="text-center" >
                              <td>
                                 <img src="../assets/images/options/01.png" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Mobil Listrik</h6>
                                 <span>IOT</span>
                              </td>
                              <td>1.000.000</td>
                              <td>100</td>
                              <td>03 Dec , 2020</td>
                              <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Page end  -->
  </body>

      {{-- TAMBAH PRODUK --}}
    <!-- Modal -->
    <div class="modal fade" id="tambahproduk" tabindex="-1" role="dialog" aria-labelledby="tambahproduk" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tambahproduk">Tambah Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                       <div class="card">
                          <div class="card-body">
                             <form action="">
                             <div class="row">
                                <div class="col-lg-12">
                                   <div class="row">
                                      <div class="col-sm-12">
                                         <form>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 mb-3">
                                                    <div class="form-group">
                                                       <label class="mb-0">Nama Produk</label>
                                                       <input class="form-control" type="text" placeholder="">
                                                    </div>
                                                 </div>
                                               <div class="col-lg-6 col-md-6 mb-3">
                                                  <div class="form-group">
                                                     <label class="mb-0">Kategori</label>
                                                     <select name="type" class="selectpicker form-control" data-style="py-0">
                                                        <option>Internet Of Things</option>
                                                        <option>artificial intelligence</option>
                                                     </select>
                                                  </div>
                                               </div>
                                               <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                   <label class="mb-2">Deskripsi</label>
                                                   <textarea class="form-control description" id="exampleFormControlTextarea2" rows="4" cols="50" placeholder="Tarik sudut kanan ke bawah"></textarea>
                                                </div>
                                             </div>
                                             <div class="col-lg-6 col-md-6 mb-3">
                                                <div class="form-group">
                                                   <label class="mb-0">Harga</label>
                                                   <input class="form-control" type="text" placeholder="">
                                                </div>
                                             </div>
                                               <div class="col-lg-6 col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="mb-0">Jumlah</label>
                                                    <input class="form-control" type="text" placeholder="">
                                                 </div>
                                               </div>
                                            </div>
                                         </form>
                                      </div>
                                   </div>
                                </div>
                             </div>
                            </form>
                            <label for="formFileMultiple" class="form-label">Tambahkan Gambar</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple />
                          </div>
                       </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>


@endsection



