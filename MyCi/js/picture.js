var start = 18;
function more_add(pid,con)
{
	if(pid){
		var urls = con;
		$.ajax({
			url:urls,
			type:'post',
			data:{'pid':pid,'start':start},
			dataType:'json',
			success:function(datas){
			var htmls = '';
                			$.each(datas, function(k,v){
					alink = '<?php echo base_url();?>index.php/picture/articles'+v.articleId+'/'+v.partId;
					htmls+='<a href="'+alink+'" target="_blank">';
				htmls+='<img src="'+v.show+'">';
				htmls+='<em>'+v.title+'</em>';
				htmls+='</a>' ;
			});
			$("#add_more").append(htmls);
			start = start+9;
			},
			 error: function(){
     				 alert("add error");
     			}
		});

	}else{
		alert('add error');	
	}
	

}
