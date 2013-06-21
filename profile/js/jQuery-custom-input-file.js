jQuery.fn.choose = function(f) {
	$(this).bind('choose', f);
};


jQuery.fn.file = function() {
	return this.each(function() {
		var btn = $(this);
		var pos = btn.offset();
								
		function update() {
			pos = btn.offset();
			file.css({
				'top': pos.top,
				'left': pos.left,
				'width': btn.width(),
				'height': btn.height()
			});
		}

		btn.mouseover(update);

		var file = $('<div><form></form></div>').appendTo('body').css({
			'position': 'absolute',
			'overflow': 'hidden',
			'-moz-opacity': '0',
			'filter':  'alpha(opacity: 0)',
			'opacity': '0',
			'z-index': '2'		
		});

		var form = file.find('form');
		var input = form.find('input');
		
		function reset() {
			var input = $('<input type="file" id="'+btn.attr("id")+'" name="'+btn.attr("id")+'">').appendTo(form);
			input.change(function(e) {
				//input.unbind();
				//input.detach();
				btn.trigger('choose', [input]);
				reset();
			});
		};
		
		reset();

		function placer(e) {
			form.css('margin-left', e.pageX - pos.left - offset.width);
			form.css('margin-top', e.pageY - pos.top - offset.height + 3);					
		}

		function redirect(name) {
			file[name](function(e) {
				btn.trigger(name);
			});
		}

		file.mousemove(placer);
		btn.mousemove(placer);

		redirect('mouseover');
		redirect('mouseout');
		redirect('mousedown');
		redirect('mouseup');

		var offset = {
			width: file.width() - 25,
			height: file.height() / 2
		};

		update();
	});
};

 function editImgProfile(){
				$.post('profile/sql/upload.php',$('#idEditImgForm').serialize(),function(response){
					if(response=="success"){
						alert("แก้ไขเรียบร้อยแล้ว");
						window.location=window.location
					}
					else{
						alert(response);
						}
				});
				}
				function editDataPofile1(editUserID){
					$(function() {
								$( "#dialog-confirm" ).dialog({
									title: "แก้ไขข้อมูลระบบ",
								  resizable: false,
								 // height:140,
								  modal: true,
								  minWidth: 420,
								  buttons: {
									"ตกลง": function() {
										submitEditDataPofile1();
									  $( this ).dialog( "close" );
									},
									'ยกเลิก': function() {
									  $( this ).dialog( "close" );
									}
								  }
								});
							  });
							$("#dialog-confirm").load("profile/php/editDataPofile1Form?editUserID="+editUserID);
					}
					function submitEditDataPofile1(){
					$.post('profile/sql/editDataPofile1.php',$('#idEditDataPofile1Form').serialize(),function(response){
						if(response=="success"){
							alert("แก้ไขเรียบร้อยแล้ว");
							window.location=window.location
						}
						else{
							alert(response);
							}
					});
					}	
					function editDataPofile2(editUserID){
					$(function() {
								$( "#dialog-confirm" ).dialog({
									title: "แก้ไขข้อมูลระบบ",
								  resizable: false,
								 // height:140,
								  modal: true,
								  minWidth: 420,
								  buttons: {
									"ตกลง": function() {
										submitEditDataPofile2();
									  $( this ).dialog( "close" );
									},
									'ยกเลิก': function() {
									  $( this ).dialog( "close" );
									}
								  }
								});
							  });
							$("#dialog-confirm").load("profile/php/editDataPofile2Form?editUserID="+editUserID);
					}
					function submitEditDataPofile2(){
					$.post('profile/sql/editDataPofile2.php',$('#idEditDataPofile2Form').serialize(),function(response){
						if(response=="success"){
							alert("แก้ไขเรียบร้อยแล้ว");
							window.location=window.location
						}
						else{
							alert(response);
							}
					});
					}		
