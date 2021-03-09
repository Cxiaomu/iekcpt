;(function($){
	var SetPage = function(ele,opt){
        this.defaults = {
            'listUrl': '',
            'countUrl': '',
            'pageBox': '.project-search-pages',
            'listType': "GET",
            'countType':"GET",
            'getBtn':'#search',
            'para':{},
            'beforeDiv':'<div class="loading-box"></div>',
            'searchBox':'.search-area',
            'searchClass':'.form-control',
            'searchKey':'id',
            'selectGet':'',
            'cb': ''
        };
        this.options = $.extend({}, this.defaults, opt);
		this.totalPage = 0;
		this.totalCount = 0;
		this.index = 0;
		this.pageSize = this.options.para.pageSize;
		this.parameter = this.options.para;
		this.$this = ele;
		
	};
	
	SetPage.prototype = {
		getList:function(){
			var _this = this
			$.ajax({
		        url: _this.options.listUrl,
		        type: _this.options.listType,
		        cache : false,
		        data: _this.parameter,
		        beforeSend: function () {
		            _this.$this.html(_this.options.beforeDiv);
		        },
		        success: function (msg) {
		        	_this.$this.html(msg);
		        	if(typeof _this.options.cb === "function"){
		            	_this.options.cb();
		            }
		        },
		        error:function(){
		        	_this.$this.html('<div style="text-align:center;padding:10px;">请求失败</div>');
		        }
		    });
		},
		getCount:function(){
			var _this = this;
			$.ajax({
		        url: _this.options.countUrl,
		        type: _this.options.countType,
		        data: _this.parameter,
		        success: function (msg) {
					msg = escapeData(msg);
		            _this.totalCount = msg;
		            _this.totalPage = Math.ceil((msg != '0' ? msg : 1) / _this.pageSize);
					var $pageBox = $(_this.options.pageBox);
					$pageBox.removeClass("hidden");
		            if (msg == 0) {
		            	$pageBox.find(".page-number").addClass("hidden");
		            	$pageBox.find(".searchPage").addClass("hidden");
						$pageBox.find(".noResult").removeClass("hidden");
						_this.$this.html("");
		            } else if (_this.totalPage == 1) {
		            	$pageBox.find(".page-number").removeClass("hidden");
		            	$pageBox.find(".searchPage").addClass("hidden");
		            	$pageBox.find(".noResult").addClass("hidden");
		            } else {
		            	$pageBox.find(".page-number").removeClass("hidden");
		            	$pageBox.find(".searchPage").removeClass("hidden");
		            	$pageBox.find(".noResult").addClass("hidden");
		            }

		            $(_this.options.pageBox).find(".Pagination").pagination(_this.totalPage, {
		                callback: _this.pageSearch
		            },_this);
		            $pageBox.find('.pageCount').html(_this.totalCount);
		        }
		    });
		},
		getCount2:function(){
			var _this = this;
			$.ajax({
		        url: _this.options.countUrl,
		        type: _this.options.countType,
		        data: _this.parameter,
		        success: function (msg) {
					msg = escapeData(msg);
		            _this.totalCount = msg;
		            _this.totalPage = Math.ceil((msg != '0' ? msg : 1) / _this.pageSize);
					var $pageBox = $(_this.options.pageBox);
					$pageBox.removeClass("hidden");
		            if (msg == 0) {
		            	$pageBox.find(".page-number").addClass("hidden");
		            	$pageBox.find(".searchPage").addClass("hidden");
		            	$pageBox.find(".noResult").removeClass("hidden");
		            } else if (_this.totalPage == 1) {
		            	$pageBox.find(".page-number").removeClass("hidden");
		            	$pageBox.find(".searchPage").addClass("hidden");
		            	$pageBox.find(".noResult").addClass("hidden");
		            } else {
		            	$pageBox.find(".page-number").removeClass("hidden");
		            	$pageBox.find(".searchPage").removeClass("hidden");
		            	$pageBox.find(".noResult").addClass("hidden");
		            }

		            $pageBox.find('.pageCount').html(_this.totalCount);
		        }
		    });
		},
		pageSearch:function(page_index,container,scope) {
			scope = scope || this;
			scope.index=page_index;
			scope.parameter.pageIndex=page_index;
			scope.getCount2();
			scope.getList();
		},
		btnSearch:function() {
			var _this = this;
			$(_this.options.pageBox).addClass("hidden");
		    $(_this.options.searchBox).find(_this.options.searchClass).each(function(){
		        var key = $(this).attr(_this.options.searchKey);
		        _this.parameter[key] = $(this).val();
		    });
		    _this.parameter.pageIndex = '0';
		    _this.index = '0';
		    _this.getCount();
		    _this.getList();
		},
		initFn:function(){
			var _this = this;
			$(_this.options.getBtn).on('click', function () {
		        _this.btnSearch();
			});
			if (_this.options.inputGet != '') {
				$('input' + _this.options.inputGet).on("keydown", function (e) {
					if (e.keyCode == 13) {
						$(_this.options.getBtn).triggerHandler("click");
						e.preventDefault();
						return false;
					}
				});
			}
		    $(_this.options.selectGet).on("change", function () {
		    	$(_this.options.getBtn).triggerHandler("click");
		    });
		    $(_this.options.pageBox).find('.my-page-btn').click(function () {
		        var goPage = $(_this.options.pageBox).find('.page-go input').val() - 1;
		        var allPage = _this.totalPage;

		        if (goPage > -1 && goPage < allPage) {
		        	$(_this.options.pageBox).find(".Pagination").pagination(allPage, {
		                callback: _this.pageSearch,
		                current_page: goPage
		            },_this);
		            _this.pageSearch(goPage,null,_this);
		        } else {
		        	$(_this.options.pageBox).find(".page-go input").val("");
		            return false;
		        }
		        $(_this.options.pageBox).find(".page-go input").val("");
		    });
		}
	};
	
	
	$.fn.extend({
		"setpage":function(options){
			var setPage = new SetPage(this, options);
	        return setPage;
		}
	})
})(jQuery);