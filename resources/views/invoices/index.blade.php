@include('dashboard.links');
<div class="app-content content">
         <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-body">
            <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="col-lg-12 col-xl-14 user-details-card">
                            <div class="card widget-user-details"> 
                                <div class="card-header">
                                    <div class="card-title-details d-flex align-items-center">
                                       
                                         <div class="dashboard-content-right">
                                                  <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                                        <lord-icon
                                                            src="https://cdn.lordicon.com/nocovwne.json"
                                                            trigger="loop"
                                                            colors="primary:#121331,secondary:#1663c7"
                                                            style="width:180px;height:180px">
                                                        </lord-icon>
                                         </div>
                                      
                                        <div>
                                            <h5>LIST SALE</h5><br>
                                            @if(Session::has('note'))
                                                {{ Session::get('note') }}
                                                @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div Class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                <section>
                                                    <div class="card-body p-0">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                            <label for="first-name-icon">Customer</label>
                                                                            <input type="text" class="form-control" placeholder="Disabled Text" disabled="" value="{{$customers->name}}">
                                                                        </fieldset> 
                                                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">  
                                                                            <label for="first-name-icon">Ci</label>
                                                                            <input type="text" class="form-control" placeholder="Disabled Text" disabled="" value="{{$customers->nit}}">
                                                                        </fieldset> 
                                                                        <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">  
                                                                            <label for="first-name-icon">Nit</label>
                                                                            <input type="text" class="form-control" placeholder="Disabled Text" disabled="" value="{{$customers->ci}}">
                                                                        </fieldset> 
                                                            </div>
                                                        </div>
                                                    </div>                          
                                                </section>          
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                            <thead>
                                                                <tr>
                                                                    <th>Menu</th>
                                                                    <th>Photo</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>SubTotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               @foreach($listSale as $list)
                                                                        <td>{{$list->nameMenu}}</td>
                                                                        <td><img src="{{ asset('storage').'/'.$list->photo}}" height="150" width="150" alt=""></td>
                                                                        <td>{{$list->price}}</td>
                                                                        <td>{{$list->number}}</td>
                                                                        <td>{{$list->subTotal}}</td>
                                                                    </tr>
                                                                @endforeach   
                                                         </tbody>
                                                    </table>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                            <div class="col-xl-2 col-md-4 col-sm-6">
                                                                <div class="card text-center">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                                                                                <i class="bx bx-message font-medium-5"></i>
                                                                            </div>
                                                                            <p class="text-muted mb-0 line-ellipsis">SALE TOTAL</p>
                                                                            <h2 class="mb-0">{{$list->total}} bs </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-2 col-md-4 col-sm-6">
                                                            <div class="card text-center">
                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                                                                            <i class="bx bx-file font-medium-5"></i>
                                                                        </div>
                                                                        <li><a href="{{ url('/receipt/') }}"><i class="text-muted mb-0 line-ellipsis"></i><span class="menu-item" data-i18n="Divider">Imprimir</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
</div>
