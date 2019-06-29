@extends('layouts.userMenu')
@section('contenido')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-1 col-12"></div>
      <div class="col-md-10 col-12">
        <h6>User Name: Melvin User Type: User </h6>
      </div>
    </div>
  </div>
  <div class="container-fluid " style="margin-bottom:80px;">
          <div class="row">
            <div class="col-12 col-md-1 "></div>
            <div class="col-12 col-md-10 ">
              <div class="card-columns">
              
              <div class="card bg-primary">
               <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Employment</h4>
                    <div class="card-body text-justify">
                      <p class="card-text">In this section you must identify the type of employment you have. </p>
                      <a href="#" class="btn btn-primary boton-dashboard" data-toggle="tooltip" title="Enter or See your Eployment Information">Enter</a>
                      
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
              <div class="card bg-warning">
                <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Income</h4>
                    <div class="card-body text-justify">
                      <p class="card-text">In this section you must enter in your income data.</p>
                      <a href="#" class="btn btn-warning boton-dashboard" data-toggle="tooltip" title="Enter or See your Income Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
              <div class="card bg-success">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Deductions</h4>
                    <div class="card-body text-Justify">
                      <p class="card-text">In this section you must enter in your tax data. </p>
                      <a href="#" class="btn btn-success boton-dashboard " data-toggle="tooltip" title="Enter or See your Deductions Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
            </div>  
            <div class="card-columns">
              <div class="card bg-danger">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Expenses</h4>
                    <div class="card-body text-Justify">
                      <p class="card-text">In this section you must enter in your tax data.</p>
                      <a href="#" class="btn btn-danger boton-dashboard" data-toggle="tooltip" title="Enter or See your Expenses Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>

              <div class="card bg-danger">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Business Interests</h4>
                    <div class="card-body text-Justify">
                      <p class="card-text">In this section you must identify if you own interest in any businesses.</p>
                      <a href="#" class="btn btn-danger boton-dashboard" data-toggle="tooltip" title="Enter or See your Business Interests Information" >Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
              <div class="card bg-light">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Financial Assets</h4>
                    <div class="card-body text-justify">
                      <p class="card-text">In this section you must identify if you own interest in any real estate.</p>
                      <a href="#" class="btn btn-light boton-dashboard" data-toggle="tooltip" title="Enter or See your Financial Assests Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
            </div> 
            <div class="card-columns"> 
                            <div class="card bg-info">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Real Estate</h4>
                    <div class="card-body text-Justify">
                      <p class="card-text">In this section you must identify if you own interest in any real estate.</p>
                      <a href="#" class="btn btn-info boton-dashboard" data-toggle="tooltip" title="Enter or See your Real Estate Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
               <div class="card bg-primary">
               <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Personal Property</h4>
                    <div class="card-body text-Justify">
                      <p class="card-text">In this section you must identify if you own personal property.</p>
                      <a href="#" class="btn btn-primary boton-dashboard" data-toggle="tooltip" title="Enter or See your Personal Property Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
              <div class="card bg-warning">
                <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Debt Owed</h4>
                    <div class="card-body text-Justify ">
                      <p class="card-text">"In this section you must identify if you owe debts property.<\p>
                          <a href="#" class="btn btn-warning boton-dashboard" data-toggle="tooltip" title="Enter or See your Debt Owed Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
            </div>  
            <div class="card-columns">
              <div class="card bg-success">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Disclosure</h4>
                    <div class="card-body text-Justify ">
                      <p class="card-text">Be aware that if you do not fully disclose all assets and income.</p>
                      <a href="#" class="btn btn-success boton-dashboard" data-toggle="tooltip" title="Enter or See your Disclosure Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
              <div class="card bg-danger">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Tax Returns</h4>
                    <div class="card-body text-center">
                      <p class="card-text">Some text inside the first card</p>
                      <a href="#" class="btn btn-danger boton-dashboard" data-toggle="tooltip" title="Enter or See your Tax Returns Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
              <div class="card bg-light">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Proof of Income</h4>
                    <div class="card-body text-center">
                      <p class="card-text">Some text inside the first card</p>
                      <a href="#" class="btn btn-light boton-dashboard" data-toggle="tooltip" title="Enter or See your Proof of Income Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
            </div>  
            <div class="card-columns">
              <div class="card bg-info">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Load Documents</h4>
                    <div class="card-body text-center">
                      <p class="card-text">Some text inside the first card</p>
                      <a href="#" class="btn btn-info boton-dashboard" data-toggle="tooltip" title="Enter or See your Load Documents">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully"  src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
      
               <div class="card bg-primary">
               <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Real Estate</h4>
                    <div class="card-body text-center">
                      <p class="card-text">Some text inside the first card</p>
                      <a href="#" class="btn btn-primary boton-dashboard" data-toggle="tooltip" title="Enter or See your Real Estate Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>s
              </div>
              <div class="card bg-warning">
                <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Financial Statements</h4>
                    <div class="card-body text-center">
                      <p class="card-text">Some text inside the first card</p>
                      <a href="#" class="btn btn-warning boton-dashboard" data-toggle="tooltip" title="Enter or See your Financial Statements Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully"src="{{asset('img/check.png')}}"> </div>
                    </div> 
              </div>

            </div>  
            <div class="card-columns">  
                            <div class="card bg-success">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">Client Case Info</h4>
                    <div class="card-body text-center">
                      <p class="card-text">Some text inside the first card</p>
                      <a href="#" class="btn btn-success boton-dashboard" data-toggle="tooltip" title="Enter or See your Client Case Information">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img  data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
              <div class="card bg-info">
                 <!-- <img class="card-img-top" src="img_avatar1.png" alt="Card image"> -->
                
                    <h4 class="card-title">FinDec Pdf Creation</h4>
                    <div class="card-body text-center">
                      <p class="card-text">Some text inside the first card</p>
                      <a href="#" class="btn btn-info boton-dashboard">Enter</a>
                    </div>
                    <div class="card-footer text-muted">
                      <div class="check-dashboard"><img data-toggle="tooltip" title="The information is successfully" src="{{asset('img/check.png')}}"> </div>
                    </div>
              </div>
            </div>
          </div><!-- /.conteneido -->
        </div><!-- /.row -->
    </div>        
@stop