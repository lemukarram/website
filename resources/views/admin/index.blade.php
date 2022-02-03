@extends('admin/layout/layout')
@section('title',$title);
@section('mainContent')


<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Settings <small>Website Basic Settings</small></h2>
									
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form method="POST" action="setting_update" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
										{{csrf_field()}}
										<x-form.input :data="[
											'type'=>'text',
											'title'=>'Website Name',
											'name'=>'name',
											'required'=>true,
											'value'=>$name
											]" />
										
										<x-form.input :data="[
											'type'=>'text',
											'title'=>'Title',
											'name'=>'title',
											'required'=>true,
											'value'=>$title
											]" />
										<x-form.textarea :data="[
											'title'=>'Description',
											'name'=>'description',
											'required'=>true,
											'value'=>$description
											]" />
										<x-form.input :data="[
											'type'=>'email',
											'title'=>'Email',
											'name'=>'email',
											'required'=>true,
											'value'=>$email
											]" />
										<x-form.input :data="[
											'type'=>'text',
											'title'=>'Phone/Mobile',
											'name'=>'phone',
											'required'=>true,
											'value'=>$phone
											]" />
										<x-form.input :data="[
											'type'=>'file',
											'title'=>'Logo',
											'name'=>'logo',
											'image'=>$logo
											]" />
										
                                        <div class="ln_solid"></div>
										<x-form.button :data="[
											'type'=>'submit',
											'title'=>'Submit'
											]" />

									</form>
								</div>
							</div>
						</div>
					</div>


@stop