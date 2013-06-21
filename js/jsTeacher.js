// JavaScript Document
$(document).ready(function() {
     $("#pdfAppointment").click(function(){
		 var myPDF = new PDFObject({
		  url: "pdf/FW001.pdf",
		  id: "myPDF",
		  pdfOpenParams: {
			navpanes: 1,
			statusbar: 1,
			view: "FitH",
			toolbar: 1,
			//pagemode: "thumbs"
		  }
		}).embed();
	 });
     	$("#pdfshow").click(function(){
			$("#dialog-confirm").load("pdf/test.php");
	 });  
});
function insertStudentForm(userID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลนักศึกษา",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitInsertStudent();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("teacher/php/insertStudentForm.php");
}

function insertRecordMeetForm(recordMeetID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลบันทึกการเข้าพบ",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitInsertRecordMeet();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("teacher/php/insertRecordMeet.php");
}

function insertCalendarFrom(){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลปฏิทินนัดหมาย",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitInsertCalendar();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("staff/php/insertCalendarForm.php");
}

function insertSumofoperationsFrom(){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลสรุปงานอาจารย์ที่ปรึกษา",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitInsertSumofoperations();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("staff/php/insertSumofoperationsForm.php");
}

function insertNewFrom(newID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลข่าว",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitInsertNew();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("staff/php/insertNewForm.php");
}

function insertFrom(newID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มฟอร์ม",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitInsertForm();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("module_form/php/insertForm.php");
}
//=============================submit insert===============================================
function submitInsertStudent(){
	$.post('teacher/sql/insertStudent.php',$('#idInsertStudentForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}	
	
function submitInsertRecordMeet(){
	$.post('teacher/sql/insertRecordMeet.php',$('#idInsertRecordMeetForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}	
	
function submitInsertCalendar(){
	$.post('staff/sql/insertCalendar.php',$('#idInsertCalendarForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}		
	
function submitInsertSumofoperations(){
	$.post('staff/sql/insertSumofoperations.php',$('#idInsertSumofoperationsForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}		
	
function submitInsertNew(){
	$.post('staff/sql/insertNew.php',$('#idInsertNewForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}			
	//=========================submit delete form==============================================
	function deleteStudent(userID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบข้อมูลนักศึกษา",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
					$.post("teacher/sql/deleteStudent.php",{"userID":userID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=manageStudent";
						}
						else{
							alert(response);
							}
						});
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });  
	}
	
function deleteRecordMeet(recordMeetID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบข้อมูลบันทึกการเข้าพบ",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
					$.post("teacher/sql/deleteRecordMeet.php",{"recordMeetID":recordMeetID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=manageRecordMeet";
						}
						else{
							alert(response);
							}
						});
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });  
	}
	
function deleteCalendar(calendarID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบข้อมูลปฏิทินนัดหมาย",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
					$.post("staff/sql/deleteCalendar.php",{"calendarID":calendarID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=manageCalendar";
						}
						else{
							alert(response);
							}
						});
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });  
	}
	
function deleteSumofoperations(SOTID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบข้อมูลสรุปงานอาจารย์",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
					$.post("staff/sql/deleteSumofoperations.php",{"SOTID":SOTID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=manageSumofoperations";
						}
						else{
							alert(response);
							}
						});
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });  
	}	
	
	
function deleteNew(newID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบข้อมูลข่าวประชาสัมพันธ์",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
					$.post("staff/sql/deleteNew.php",{"newID":newID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=manageNew";
						}
						else{
							alert(response);
							}
						});
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });  
	}	
	//==================================edit form==========================================
	function editStudent(userID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขข้อนักศึกษา",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditStudent();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("teacher/php/editStudentForm.php?userID="+userID);
	}
	
function editRecordMeet(recordMeetID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขข้อมูลการเข้าพบ",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditRecordMeet();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("teacher/php/editRecordMeetForm.php?recordMeetID="+recordMeetID);
	}	
	
function editCalendar(calendarID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขข้อมูลปฏิทินนัดหมาย",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditCalendar();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("staff/php/editCalendarForm.php?calendarID="+calendarID);
	}	
	
function editSumofoperations(SOTID){
$(function() {
			$( "#dialog-confirm" ).dialog({
				title: "แก้ไขข้อมูลสรุปงานอาจารย์",
			  resizable: false,
			 // height:140,
			  modal: true,
			  minWidth: 420,
			  buttons: {
				"ตกลง": function() {
					submitEditSumofoperations();
				  $( this ).dialog( "close" );
				},
				'ยกเลิก': function() {
				  $( this ).dialog( "close" );
				}
			  }
			});
		  });
		$("#dialog-confirm").load("staff/php/editSumofoperationsForm.php?SOTID="+SOTID);
}	
	
function editNew(newID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขข้อมูลข่าวประชาสัมพันธ์",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditNew();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("staff/php/editNewForm.php?newID="+newID);
	}		
	
	//==========================================submit edit=====================
function submitEditStudent(){
	$.post('teacher/sql/editStudent.php',$('#idEditStudentForm').serialize(),function(response){
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}		
	
function submitEditRecordMeet(){
	$.post('teacher/sql/editRecordMeet.php',$('#idEditRecordMeetForm').serialize(),function(response){
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}		
	
function submitEditCalendar(){
	$.post('staff/sql/editCalendar.php',$('#idEditCalendarForm').serialize(),function(response){
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}	
	
function submitEditSumofoperations(){
$.post('staff/sql/editSumofoperations.php',$('#idEditSumofoperationsForm').serialize(),function(response){
	if(response=="success"){
		alert("แก้ไขเรียบร้อยแล้ว");
		window.location=window.location
	}
	else{
		alert(response);
		}
});
}	
	
function submitEditNew(){
	$.post('staff/sql/editNew.php',$('#idEditNewForm').serialize(),function(response){
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}		