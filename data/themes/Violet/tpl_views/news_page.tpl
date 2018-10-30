

<header>
	<a href="{{$HOME}}">BOOTCAMP</a>
	<nav>
{{W name=menuDroppy}}
	</nav>
</header>

<content>
<section>
	<div class="col-md-8">
	<h1>{{$page->name}}</h1>
	{{eval var=$page->content}}
	</div>
	<div class="col-md-4">
		{{W name=newsNormal newsGroup=906 showAuthor=0 showDate=0 length=220 count=4 width=120 height=120 cssUl="row" cssLi="col-md-6"}}
	</div>
</section>
</content>


<!-- <div class="container">
{{include file='../tpl_common/top.tpl'}}	
<div class="content">	
		<div class="row simplerow">
			<div class="col-md-4 hidden-xs hidden-sm">
				{{include file='../tpl_common/left_column.tpl'}}
			</div>
			<div class="col-md-8">
                <div class="pad">
					<h2>{{$page->name}}</h2>
					{{W name=navigation page=$page}}
					{{eval var=$page->content}}
                </div>
			</div>
		</div>
	</div>
{{include file='../tpl_common/footer.tpl'}}
</div> -->