@extends('layouts.mainadm')

@section('container')
<div class="content-page">
    <div class="container-fluid">
       <div class="d-grid grid-cols-2 custom-grid-media">
          <div class="">
             <div class="card border subs-card">
                <div class="card-body">
                   <div class="">
                      <div class="">
                         <h2 class="mb-2">Hi , Wilma Mumduya</h2>
                         <p class="pb-3">Welcome all your new subscribers. It’s good to have you here!</p>
                      </div>
                      <div class="d-flex flex-wrap align-items-center mt-4">
                         <a class="btn btn-lg btn-primary mr-3" href="">Create E-mail</a>
                         <a class="btn btn-lg btn-transparent explore" href="">Explore All<i class="ri-arrow-right-line ml-2 mt-1"></i></a>
                      </div>
                   </div>
                   <div class="subs-image">
                      <img src="../assets/images/layouts/banner.png" alt="user-image" class="img-fluid">
                   </div>
                </div>
             </div>
          </div>
          <div class="right-list index-list-scrollbar">
             <a href="page-contacts.html" title="">
                <div class="media iq-option border align-items-center p-3">
                   <div class="bg-success-light rounded p-4">
                      <img src="../assets/images/options/01.png" class="img-fluid avatar-50" alt="image">
                   </div>
                   <div class="media-body">
                      <h4 class="mb-2">Upload Contacts</h4>
                      <p class="mb-0">Upload all your records from your current system, and import them into EmailCHIMP.</p>
                   </div>
                </div>
             </a>
             <a href="page-create-templates.html" title="">
                <div class="media iq-option border align-items-center p-3">
                   <div class="bg-danger-light rounded p-4">
                      <img src="../assets/images/options/02.png" class="img-fluid avatar-50" alt="image">
                   </div>
                   <div class="media-body">
                      <h4 class="mb-2">Create Template</h4>
                      <p class="mb-0">Create a page, design it as you like, save it as a template and use for further work.</p>
                   </div>
                </div>
             </a>
             <a href="page-campaigns.html" title="">
                <div class="media iq-option active border align-items-center p-3">
                   <div class="bg-success-light rounded p-4">
                      <img src="../assets/images/options/03.png" class="img-fluid avatar-50" alt="image">
                   </div>
                   <div class="media-body">
                      <h4 class="mb-2">Send campaign</h4>
                      <p class="mb-0">Create and send your email campaign in literally minutes with a few quick steps.</p>
                   </div>
                </div>
             </a>
             <a href="page-integration.html" title="">
                <div class="media iq-option border align-items-center p-3">
                   <div class="bg-info-light rounded p-4">
                      <img src="../assets/images/options/04.png" class="img-fluid avatar-50" alt="image">
                   </div>
                   <div class="media-body">
                      <h4 class="mb-2">Verify domain</h4>
                      <p class="mb-0">Verify your company's domain to prove that you own all user accounts with that domain.</p>
                   </div>
                </div>
             </a>
             <a href="page-activity.html" title="">
                <div class="media iq-option border align-items-center p-3">
                   <div class="bg-warning-light rounded p-4">
                      <img src="../assets/images/options/08.png" class="img-fluid avatar-50" alt="image">
                   </div>
                   <div class="media-body">
                      <h4 class="mb-2">Get advice</h4>
                      <p class="mb-0">Boost your sales and level up your business with our expert overview options.</p>
                   </div>
                </div>
             </a>
          </div>
       </div>
       
@endsection