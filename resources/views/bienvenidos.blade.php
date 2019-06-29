@extends('layouts.userMenu')
@section('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1 col-sm-12"></div>
			<div class="col-md-8 col-sm-12">
				<h6>User Name: Melvin User Type: User {{$menu}}</h6>
			</div>
		</div>
	</div>
	 <div class="container-fluid " style="margin-bottom:80px;">
          <div class="row">
            <div class="col-md-1 col-12"></div>
            <div class="col-md-8 col-12">
            <!-- The Modal -->
            <div class="modal modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">First Use</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                            <p>The person who files for divorce (the petitioner) must serve the financial declaration and attachments on the responding party (respondent) within 14 days after the respondent files their first answer to the petition.</p>
                            <p>The respondent must serve the financial declaration and attachments on the petitioner within 42 days after filing of the first answer, or within 28 days after the respondent's appearance in the case, whichever is later.</p>
                            <p>Once you've completed this process you must file a certificate of service with the court stating that he or she has provided the financial declaration and attachments to the other party. If you have an attorney, work with them to have this document certified and filed with the court. If you are not working with an attorney (Pro se) you will need to take the final document and all of the attached documents to the district court where your case has been filed. </p>
                            <p>Please note that according to the requirements of the court, you must update the information as it changes. </p>
                            <p>Throughout the solution you will find the help icon "i". When you see that icon, please hover over the icon to get more details on how to use or complete a section.</p>

                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>
            <!-- Modal Fin -->
            </div><!-- /.conteneido -->
          </div><!-- /.row -->
      </div>
@stop