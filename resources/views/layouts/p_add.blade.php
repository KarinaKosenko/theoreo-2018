@extends ('layouts.base')
           
@section ('content')

			<div class="container-fluid">
				<div class="row">

					<aside class="sidebar col-xs-24 col-md-4">
						<div class="sidebar__wrap">
							<div class="sidebar__item sidebar-nav">
								<ul class="sidebar-nav__list">
									<li class="sidebar-nav__item">
										<a href="p_brands.html" class="sidebar-nav__link active">Бренды</a>
									</li>
									<li class="sidebar-nav__item">
										<a href="p_offers.html" class="sidebar-nav__link">Акции</a>
									</li>
									<li class="sidebar-nav__item">
										<a href="p_billing.html" class="sidebar-nav__link">Биллинг</a>
									</li>
								</ul>
							</div>
						</div>
					</aside>
					<div class="report col-xs-24 col-md-20">
						<h2 class="report__heading">Добавление акции</h2>
						<div class="add-report">
						<div class="row">
							<div class="col-xs-24 col-md-18 col-lg-12">



							<form action="" role="form" class="report__wrap form-horizontal">
								<fieldset class="form-group">
								    <label class="col-xs-24 col-sm-10" for="">
								    	Бренд 
								    	<span class="sign-required" data-toggle="tooltip" data-placement="right" title="Обязательно для заполнения">*</span>
									</label>
									<div class="col-xs-24 col-sm-14">
										<select id="" class="form-control">
										    <option>Рубль Бум</option>
										    <option>Gliss Kur</option>
										    <option>Purina</option>
										</select>
									</div>
								</fieldset>

								<fieldset class="form-group">
									<label class="col-xs-24 col-sm-10" for="">
										Название акции
								    	<span class="sign-required" data-toggle="tooltip" data-placement="right" title="Обязательно для заполнения">*</span>
									</label>
									<div class="col-xs-24 col-sm-14">
										<textarea id="" class="form-control" rows="3" required></textarea>
									</div>
								</fieldset>

								<fieldset class="form-group">
									<div class="col-xs-24 col-sm-10">
										Основное изображение 
								    	<span class="sign-required" data-toggle="tooltip" data-placement="right" title="Обязательно для заполнения">*</span>
									</div>
									<div class="col-xs-24 col-sm-14">
										<div class="form-upload__list">
											<label class="form-upload col-xs-24" for="f3">
												<div class="form-control form-upload form-upload-lg">
													<span class="glyphicon glyphicon-plus"></span> Добавить фото
												</div>
											</label>
											<input type="file" id="f3" class="hidden">
										</div>
									</div>
								</fieldset>

								<fieldset class="form-group">
									<div class="col-xs-24 col-sm-10">
										Дополнительные фото
								    	<span class="sign-required" data-toggle="tooltip" data-placement="right" title="Обязательно для заполнения">*</span>
									</div>
									<div class="col-xs-24 col-sm-14">
										<div class="form-upload__list">
											<label class="form-upload col-xs-8" for="f3">
												<div class="form-control form-upload form-upload-lg">
													<span class="glyphicon glyphicon-plus"></span>
												</div>
											</label>
											<input type="file" id="f3" class="hidden">
											<label class="form-upload col-xs-8" for="f3">
												<div class="form-control form-upload form-upload-lg">
													<span class="glyphicon glyphicon-plus"></span>
												</div>
											</label>
											<input type="file" id="f3" class="hidden">
											<label class="form-upload col-xs-8" for="f3">
												<div class="form-control form-upload form-upload-lg">
													<span class="glyphicon glyphicon-plus"></span>
												</div>
											</label>
											<input type="file" id="f3" class="hidden">
										</div>


									</div>
								</fieldset>

								<fieldset class="form-group">
									<label class="col-xs-24 col-sm-10" for="">
										Описание акции
								    	<span class="sign-required" data-toggle="tooltip" data-placement="right" title="Обязательно для заполнения">*</span>
									</label>
									<div class="col-xs-24 col-sm-14">
										<textarea id="" class="form-control" rows="3" required></textarea>
									</div>
								</fieldset>

								<fieldset class="form-group">
									<label class="col-xs-24 col-sm-10" for="">
										Ссылка на интернет магазин 
								    	<span class="sign-tooltip" data-toggle="tooltip" data-placement="right" 
								    		title="ваш-сайт.ру">?</span>
									</label>
									<div class="col-xs-24 col-sm-14">
										<input id="" type="text" class="form-control">
									</div>
								</fieldset>

								<fieldset class="form-group">
									<label class="col-xs-24 col-sm-10" for="">
										Дата начала акции
									</label>
									<div class="col-xs-24 col-sm-14">
										<input id="" type="date" class="form-control">
									</div>
								</fieldset>

								<fieldset class="form-group">
									<label class="col-xs-24 col-sm-10" for="">
										Дата начала акции
									</label>
									<div class="col-xs-24 col-sm-14">
										<input id="" type="date" class="form-control">
									</div>
								</fieldset>

								<fieldset class="form-group">
									<label class="col-xs-24 col-sm-10" for="">
										Вид акции
								    	<span class="sign-required" data-toggle="tooltip" data-placement="right" title="Обязательно для заполнения">*</span>
									</label>
									<div class="col-xs-24 col-sm-14">
										<select id="" class="form-control">
											<option>Акция 1</option>
											<option>Акция 2</option>
											<option>Акция 3</option>
										</select>
									</div>
								</fieldset>

								<fieldset class="form-group">
									<label class="col-xs-24 col-sm-10" for="">
										Категория 
								    	<span class="sign-required" data-toggle="tooltip" data-placement="right" title="Обязательно для заполнения">*</span>
									</label>
									<div class="col-xs-24 col-sm-14">
										<select id="" class="form-control">
											<option>Категория 1</option>
											<option>Категория 2</option>
											<option>Категория 3</option>
										</select>
									</div>
								</fieldset>

								<fieldset class="form-group">
									<div class="col-xs-24 col-sm-10">
										Подкатегории
								    	<span class="sign-required" data-toggle="tooltip" data-placement="right" title="Обязательно для заполнения">*</span>
									</div>

									<div class="col-xs-24 col-sm-14">
										<div class="checkbox">
										    <input id="ch1" type="checkbox" class="hidden">
										    <label for="ch1" class="form-checkbox">
										        Категория 1
										    </label>
										</div>
										<div class="checkbox">
										    <input id="ch2" type="checkbox" class="hidden">
										    <label for="ch2" class="form-checkbox">
										       	Категория 2
										    </label>
										</div>
										<div class="checkbox">
										    <input id="ch3" type="checkbox" class="hidden">
										    <label for="ch3" class="form-checkbox">
										      	Категория 3
										    </label>
										</div>
									</div>
								</fieldset>

								<fieldset class="form-group">
									<label class="col-xs-24 col-sm-10" for="">
										Теги
								    	<span class="sign-tooltip" data-toggle="tooltip" data-placement="right" title="Введите теги">?</span>
									</label>
									<div class="col-xs-24 col-sm-14">
										<input id="inputTags" type="text" class="form-control">
									</div>
								</fieldset>

								<fieldset class="form-group">
									<label class="col-xs-24 col-sm-10" for="">
										Город проведения
										<span class="sign-required" data-toggle="tooltip" data-placement="right" title="Город проведения">*</span>
									</label>
									<div class="col-xs-24 col-sm-14">
											<select id="" class="form-control">
												<option value="">Москва</option>
												<option value="">Санкт-Петербург</option>
												<option value="">Саратов</option>
											</select>
									</div>
								</fieldset>

								<fieldset class="form-group">
									<div class="col-xs-24 col-sm-10"></div>
									<div class="col-xs-24 col-sm-14">
										<button class="btn btn-primary btn-lg btn-block">Сохранить</button>
									</div>
								</fieldset>
							</form>



								</div>
								</div>
						</div>
						</div>
					</div>
				</div>
@endsection