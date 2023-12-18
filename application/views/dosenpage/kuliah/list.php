				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
							<div class="d-flex align-items-center">
								<div class="mr-auto">
									<h3 class="m-subheader__title m-subheader__title--separator">
										Mata Kuliah
									</h3>
									<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
										<li class="m-nav__item m-nav__item--home">
											<a href="#" class="m-nav__link m-nav__link--icon">
												<i class="m-nav__link-icon la la-home"></i>
											</a>
										</li>
										<li class="m-nav__separator">
											-
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
												<span class="m-nav__link-text">
													Tabel Mata Kuliah
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-lg-12">
								<div class="m-portlet m-portlet--mobile">
									<div class="m-portlet__body">
										<!--begin: Search Form -->
										<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
											<div class="row align-items-center">
												<div class="col-md-12">
													<div class="form-group m-form__group row align-items-center">
														<div class="col-md-4">
															<div class="m-portlet__head-title">
																<h3 class="m-portlet__head-text">
																	<i style="font-size: 1.7rem;" class="la la-table"></i>Tabel Mata Kuliah
																</h3>
															</div>
														</div>
														<!-- <div class="col-md-4">
															<div class="m-input-icon m-input-icon--left">
																<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
																<span class="m-input-icon__icon m-input-icon__icon--left">
																	<span>
																		<i class="la la-search"></i>
																	</span>
																</span>
															</div>
														</div> -->
														<div class="col-xl-4 offset-md-4 order-1 order-xl-2 m--align-right">
															<a href="<?=dosen_url('kuliah/tambah')?>" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air ">
																<span>
																	<i class="la la-plus"></i>
																	<span>
																		Tambah Mata Kuliah
																	</span>
																</span>
															</a>
															<div class="m-separator m-separator--dashed d-xl-none"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--begin: Datatables -->
<?php
	if($data == null) { ?>
										<td align="center" colspan="5"><p>Belum ada Data Mata Kuliah pada Database</p></td>
<?php }else{ 
	$i = 1; ?>
										<table class="table" id="tbl_spk_cs">
											<thead>
												<tr>
													<th>No</th>
													<th>Mata Kuliah</th>
													<th>Kode</th>
													<th>Program</th>
													<th>Semester</th>
													<th>SKS</th>
													<th>Tindakan</th>
												</tr>
											</thead>
											<tbody>
<?php	foreach ($data as $kuliah){ ?>
												<tr>
													<td><?=$i?></td>
													<td><?=$kuliah->mata_kuliah?></td>
													<td><?=$kuliah->kode?></td>
													<td><?=$kuliah->program?></td>
													<td><?=$kuliah->semester?></td>
													<td><?=$kuliah->sks?></td>
													<td>
														<a href="<?=dosen_url('kuliah/edit/'.$kuliah->id_kuliah)?>" class="btn btn-sm btn-primary" style="color:white; width:80px;">Edit</a>
														<a href="javascript:;" onclick="hapus_data('kuliah', '<?=$kuliah->id_kuliah?>')" class="btn btn-sm btn-danger" style="color:white; width:80px; margin-top: 10px">Hapus</a>
													</td>
												</tr>
<?php $i++; } } ?>
											</tbody>
										</table>
										<!--end: Datatable -->
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end:: Body -->
