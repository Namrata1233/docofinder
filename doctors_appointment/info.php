 <!-- Masthead-->
 <header class="masthead">
     <div class="container h-100">
         <div class="row h-100 align-items-center justify-content-center text-center">
             <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                 <h1 class="text-uppercase text-white font-weight-bold">Patient's Panel</h1>
                 <hr class="divider my-4" />
             </div>

         </div>
     </div>
 </header>
 <!doctype html>
 <html>

 <head>
 </head>

 <body>
     <form name="form" action="index.php?page=database" method="POST">
         <section class="vh-100" style="background-color: #eee;">
             <div class="container h-100">
                 <div class="row d-flex justify-content-center align-items-center h-100">
                     <div class="col-lg-12 col-xl-11">
                         <div class="card text-black" style="border-radius: 25px;">
                             <div class="card-body p-md-5">
                                 <div class="row justify-content-center">
                                     <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                         <form class="mx-1 mx-md-4">

                                             <div class="align-items-center mb-4">
                                                 <div class="form-outline flex-fill mb-0">
                                                     <label class="form-label">Name</label>
                                                     <input type="text" name="name" placeholder="Enter Your Name"
                                                         class="form-control" required/>
                                                 </div>
                                             </div>

                                             <div class="align-items-center mb-4">
                                                 <div class="form-outline flex-fill mb-0">
                                                     <label class="form-label">Address</label>
                                                     <input type="text" name="address" placeholder="Enter Your Address"
                                                         class="form-control" required/>
                                                 </div>
                                             </div>

                                             <div class="align-items-center mb-4">
                                                 <div class="form-outline flex-fill mb-0">
                                                     <label class="form-label">Contact No</label>
                                                     <input type="text" name="contact_no"
                                                         placeholder="Enter Your Contact Number" class="form-control" required/>
                                                 </div>
                                             </div>

                                             <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                 <button type="Submit" name="submit" value="Submit"
                                                     class="btn btn-primary btn-lg mx-3">Submit</button>
                                                 <button type="Reset" name="reset" value="Reset"
                                                     class="btn btn-primary btn-lg">Reset</button>
                                             </div>
                                         </form>
                                     </div>
                                     <div
                                         class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                         <img src="assets/img/downloaded/draw1.webp"
                                             class="img-fluid" alt="Sample image">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </form>
 </body>

 </html>