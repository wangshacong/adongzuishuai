<div class="top_con">
		<div class="nav">
			<div class="go_index"><a href="/">首页<i>HOME</i></a></div>
			<div class="nav1">

				<ul>
					@foreach($fenlei as $v)
					<li><a href="/fenlei/{{$v['id']}}">{{$v['fenlei_name']}}</a></li>

					@endforeach
				</ul>

				<ul>


					<li><a href="http://www.xunjk.com/xinwen/jinrong/">金融</a></li>
					<li><a href="http://www.xunjk.com/xinwen/yejie/">业界</a></li>
					<li><a href="http://www.xunjk.com/xinwen/cy/">产业</a></li>
					<li><a href="http://www.xunjk.com/xinwen/yanjiu/">研究</a></li>
					<li><a href="http://www.xunjk.com/xinwen/dongcha/">洞察</a></li>


				</ul>

			</div>
			<div class="nav1">
				<ul>

					<li><a href="http://www.xunjk.com/xinwen/">新闻</a></li>
					<li><a href="http://www.xunjk.com/zhineng/">智能</a></li>
					<li><a href="http://www.xunjk.com/jingji/">经济</a></li>
					<li><a href="http://www.xunjk.com/xiangmu/">项目</a></li>
					<li><a href="http://www.xunjk.com/shangye/">商业</a></li>
				</ul>
				<ul>
					<li><a href="http://www.xunjk.com/licai/">理财</a></li>
					<li><a href="http://www.xunjk.com/baoxian/">保险</a></li>
					<li><a href="http://www.xunjk.com/fangchan/">房产</a></li>
					<li><a href="http://www.xunjk.com/fuwu/">服务</a></li>
					<li><a href="http://www.xunjk.com/jihua/">计划</a></li>
				</ul>

			</div>

		</div>
	</div>