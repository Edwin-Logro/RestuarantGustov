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
                                                                          <input type="hedden" class="form-control round form-control-lg shadow pl-2" name="name" id="name" value="">
                                                                        </fieldset>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                    
                                                </section>
                                                                       
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    
                                                    {{$name}}
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
                                                                <?php
                                                                $num=0;
                                                                ?>
                                                                     
                                                   
                                                             <td> 
                                                               <label for="first-name-icon">Total</label>
                                                                <td>
                                                                    <td>
                                                                        <td>
                                                                             <td>

                                                                                <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                                                                        <?php echo $num ?>
                                           
                                                                            </fieldset>
                                                                            </td>
                                                                        </td>
                                                                    </td>
                                                                </td>
                                                             </td>
                                                                    
                                                            </tbody>
                                                    </table>
                                                </tbody>
                                            </table>
                                          <!-- <a href="{{url('/menu/'.$menu->id.'/edit')}}"><h1  class="bx bx-edit-alt"></h1><br><br>
                                                                    <form action="{{url('/menu/'.$menu->id) }}" method="post">
                                                                        @csrf
                                                                        {{method_field('DELETE')}}
                                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete menu?')" class="btn btn-icon btn-danger rounded-circle" type="button" data-repeater-delete="">
                                                                        <i class="bx bx-x"></i>
                                                                        </button></a>
                                                                    
                                                                    </form> 
                                            <button href="#" class="btn btn-success round mr-1 mb-1">Imprimir</button> -->
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
