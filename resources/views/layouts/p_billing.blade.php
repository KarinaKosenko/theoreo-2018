@extends ('layouts.base')
           
@section ('content')

			<div class="container-fluid">
				<div class="row">

					<aside class="sidebar col-xs-24 col-md-4">
						<div class="sidebar__wrap">
							<div class="sidebar__item sidebar-nav">
								<ul class="sidebar-nav__list">
									<li class="sidebar-nav__item">
										<a href="p_brands.html" class="sidebar-nav__link">Бренды</a>
									</li>
									<li class="sidebar-nav__item">
										<a href="p_offers.html" class="sidebar-nav__link">Акции</a>
									</li>
									<li class="sidebar-nav__item">
										<a href="p_billing.html" class="sidebar-nav__link active">Биллинг</a>
									</li>
								</ul>
							</div>
						</div>
					</aside>
					<div class="report col-xs-24 col-md-20">
							<h2 class="report__heading">Операции</h2>
							<div class="row">
								<div class="report__wrap clearfix">
									<div class="col-xs-24 col-sm-12">
										<div class="report__btn-wrap">
											<a href="p_add.html" title="Пополнить" class="btn btn-primary">
												<i class="report__ico ico ico-plus"></i>
												Пополнить
											</a>
											<span class="report__balance">
												<b>Баланс:</b> 3 580 руб.
											</span>
										</div>
									</div>
									<div class="col-xs-24 col-sm-12">
										<form action="" class="report__search">
											<label class="report__search-text text-left" for="small-search">Поиск:</label>
											<input id="small-search" class="form-control report__search-input" type="text" placeholder="Название или ID операции">
										</form>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-24">
									<div class="table-block">
											<div class="table-block__row hidden-xs">
												<div class="table-block__col-head">
													<a href="?sortby=ID&act=ASC" title="По возрастанию">
														<i class="ico ico-arrow-sort-up"></i>
														<i class="ico ico-arrow-sort-down hidden"></i>
														Сумма
													</a>
												</div>
												<div class="table-block__col-head">
													<a href="?sortby=name&act=ASC" title="По алфавиту">
														<i class="ico ico-arrow-sort-up hidden"></i>
														<i class="ico ico-arrow-sort-down-active"></i>
														Тип
													</a>
												</div>
												<div class="table-block__col-head">
													<a href="?sortby=ID&act=ASC" title="По возрастанию">
														<i class="ico ico-arrow-sort-up"></i>
														<i class="ico ico-arrow-sort-down hidden"></i>
														Действие
													</a>
												</div>
												<div class="table-block__col-head">
													<a href="?sortby=ID&act=ASC" title="По возрастанию">
														<i class="ico ico-arrow-sort-up"></i>
														<i class="ico ico-arrow-sort-down hidden"></i>
														Дата операции
													</a>
												</div>
											</div>
											<div class="table-block__row">
												<div class="table-block__col">
													<span class="cell__name"></span>
													1 500 руб.
												</div>
												<div class="table-block__col">
													<span class="cell__name"></span>
													Пополнение баланса
												</div>
												<div class="table-block__col">
													<span class="cell__name"></span>
													-
												</div>
												<div class="table-block__col">
													<span class="cell__name"></span>
													16.09.2015 09:32:59
												</div>
											</div>
											<div class="table-block__row">
												<div class="table-block__col">
													<span class="cell__name"></span>
													1 500 руб.
												</div>
												<div class="table-block__col">
													<span class="cell__name"></span>
													Вывод средств
												</div>
												<div class="table-block__col">
													<span class="cell__name"></span>
													-
												</div>
												<div class="table-block__col">
													<span class="cell__name"></span>
													16.09.2015 09:32:59
												</div>
											</div>
											<div class="table-block__row">
												<div class="table-block__col">
													<span class="cell__name"></span>
													1 500 руб.
												</div>
												<div class="table-block__col">
													<span class="cell__name"></span>
													Пополнение баланса
												</div>
												<div class="table-block__col">
													<span class="cell__name"></span>
													-
												</div>
												<div class="table-block__col">
													<span class="cell__name"></span>
													16.09.2015 09:32:59
												</div>
											</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="report__wrap clearfix">
									<div class="col-sm-12 hidden-xs">
										<div class="report__shows-record">Записи с 1 по 15 из 22 записей</div>
									</div>
									<div class="col-xs-24 col-sm-12">
										<div class="pagination">
											<ul class="pagination__list pagination__list--right">
												<li class="pagination__item">
													<a href="/" class="pagination__link">
														<i class="ico ico-arrow-left"></i>
													</a>
												</li>
												<li class="pagination__item">
													<a href="/" class="pagination__link active">1</a>
												</li>
												<li class="pagination__item">
													<a href="/" class="pagination__link">2</a>
												</li>
												<li class="pagination__item">
													<a href="/" class="pagination__link">3</a>
												</li>
												<li class="pagination__item">
													<a href="/" class="pagination__link">
														<i class="ico ico-arrow-right"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>
					</div>
				</div>
				</div>
@endsection