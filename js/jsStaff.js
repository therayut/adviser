// JavaScript Document
//==========================insert From====================================
function insertFacultyFrom(FacultyID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลคณะ",
				  resizable: false,
				  minWidth: 350,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
						submitInsertFaculty();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("module_mainData/php/insertFacultyForm.php");
}

function insertDepartmentFrom(FacultyID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลภาควิชา",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 350,
				  buttons: {
					"ตกลง": function() {
						submitInsertDepartment();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("module_mainData/php/insertDepartmentForm.php?FacultyID="+FacultyID);
}

function insertMajorFrom(DepartmentID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลหลักสูตร",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 350,
				  buttons: {
					"ตกลง": function() {
						submitInsertMajor();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("module_mainData/php/insertMajorForm.php?DepartmentID="+DepartmentID);
}

function insertStudentGroupFrom(MajorID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลกลุ่มเรียน",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitInsertStudentGroup();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("module_mainData/php/insertStudentGroupForm.php?MajorID="+MajorID);
}

function insertTeacherForm(userID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลอาจารย์",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitInsertTeacher();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("staff/php/insertTeacherForm.php");
}

function insertAppointmentForm(appointmentID){
	/*$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "เพิ่มข้อมูลหนังสือแต่งตั้ง",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 600,
				  buttons: {
					"ตกลง": function() {
						submitInsertTeacher();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
		$("#dialog-confirm").load("staff/php/insertAppointment.php");
		*/
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
		$("#dialog-confirm").load("module_calendar/php/insertCalendarForm.php");
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
function submitInsertFaculty(){
	$.post('module_mainData/sql/insertFaculty.php',$('#idInsertFacultyForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}
	
function submitInsertDepartment(){
	$.post('module_mainData/sql/insertDepartment.php',$('#idInsertDepartmentForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}
	
function submitInsertMajor(){
	$.post('module_mainData/sql/insertMajor.php',$('#idInsertMajorForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}
	
function submitInsertStudentGroup(){
	$.post('module_mainData/sql/insertStudentGroup.php',$('#idInsertStudentGroupForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}	
	
function submitInsertTeacher(){
	$.post('staff/sql/insertTeacher.php',$('#idInsertTeacherForm').serialize(),function(response){
		if(response=="success"){
			alert("บันทึกเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}	
	
function submitInsertAppointment(){
	$.post('staff/sql/insertAppointment.php',$('#idInsertAppointmentForm').serialize(),function(response){
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
	$.post('module_calendar/sql/insertCalendar.php',$('#idInsertCalendarForm').serialize(),function(response){
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
	function deleteFaculty(FacultyID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบคณะ",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
					$.post("module_mainData/sql/deleteFaculty.php",{"FacultyID":FacultyID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=faculty";
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
	function deleteDepartment(DepartmentID,FacultyID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบภาควิชา",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
						$.post("module_mainData/sql/deleteDepartment.php",{"DepartmentID":DepartmentID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=department&facultyID="+FacultyID;
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
	
	function deleteMajor(MajorID,DepartmentID,FacultyID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบหลักสูตร",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
						$.post("module_mainData/sql/deleteMajor.php",{"MajorID":MajorID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=major&facultyID="+FacultyID+"&departmentID="+DepartmentID;
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
	
	function deleteStudentGroup(GroupID,MajorID,DepartmentID,FacultyID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบกลุ่มเรียน",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
					$.post("module_mainData/sql/deleteStudentGroup.php",{"GroupID":GroupID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=studentGroup&facultyID="+FacultyID+"&departmentID="+DepartmentID+"&majorID="+MajorID;
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
	
	function deleteTeacher(userID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบข้อมูลผู้ใช้งาน",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
					$.post("staff/sql/deleteTeacher.php",{"userID":userID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=manageTeacher";
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
	
function deleteAppointment(appointmentID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "ลบข้อมูลหนังสือแต่งตั้ง",
				  resizable: false,
				 // height:140,
				  modal: true,
				  buttons: {
					"ตกลง": function() {
					$.post("staff/sql/deleteAppointment.php",{"appointmentID":appointmentID},function(response){
						if(response == "success"){
							alert("ลบเรียบร้อยแล้ว");
							window.location="home.php?mod=manageAppointment";
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
					$.post("module_calendar/sql/deleteCalendar.php",{"calendarID":calendarID},function(response){
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
	function editFaculty(FacultyID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขคณะ",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 350,
				  buttons: {
					"ตกลง": function() {
					submitEditFaculty();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("module_mainData/php/editFacultyForm.php?FacultyID="+FacultyID);
	}
	
	function editDepartment(DepartmentID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขภาควิชา",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 350,
				  buttons: {
					"ตกลง": function() {
					submitEditDepartment();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("module_mainData/php/editDepartmentForm.php?DepartmentID="+DepartmentID);
	}
	
	function editMajor(MajorID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขหลักสูตร",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditMajor();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("module_mainData/php/editMajorForm.php?MajorID="+MajorID);
	}
	
	function editStudentGroup(GroupID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขกลุ่ม",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditStudentGroup();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("module_mainData/php/editStudentGroupForm.php?GroupID="+GroupID);
	}
	
	function editTeacher(userID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขข้อผู้ใช้งาน",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditTeacher();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("staff/php/editTeacherForm.php?userID="+userID);
	}
	
function editAppointment(appointmentID){
	$(function() {
				$( "#dialog-confirm" ).dialog({
					title: "แก้ไขข้อมูลหนังสือแต่งตั้ง",
				  resizable: false,
				 // height:140,
				  modal: true,
				  minWidth: 420,
				  buttons: {
					"ตกลง": function() {
						submitEditAppointment();
					  $( this ).dialog( "close" );
					},
					'ยกเลิก': function() {
					  $( this ).dialog( "close" );
					}
				  }
				});
			  });
			$("#dialog-confirm").load("staff/php/editAppointmentForm.php?appointmentID="+appointmentID);
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
			$("#dialog-confirm").load("module_calendar/php/editCalendarForm.php?calendarID="+calendarID);
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
function submitEditFaculty(){
	$.post('module_mainData/sql/editFaculty.php',$('#idEditFacultyForm').serialize(),function(response){
		
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}
	
function submitEditDepartment(){
	$.post('module_mainData/sql/editDepartment.php',$('#idEditDepartmentForm').serialize(),function(response){
		
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}
	
function submitEditMajor(){
	$.post('module_mainData/sql/editMajor.php',$('#idEditMajorForm').serialize(),function(response){
		
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}
	
function submitEditStudentGroup(){
	$.post('module_mainData/sql/editStudentGroup.php',$('#idEditStudentGroupForm').serialize(),function(response){
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}	
	
function submitEditTeacher(){
	$.post('staff/sql/editTeacher.php',$('#idEditTeacherForm').serialize(),function(response){
		if(response=="success"){
			alert("แก้ไขเรียบร้อยแล้ว");
			window.location=window.location
		}
		else{
			alert(response);
			}
	});
	}		
	
function submitEditAppointment(){
	$.post('staff/sql/editAppointment.php',$('#idEditAppointmentForm').serialize(),function(response){
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
	$.post('module_calendar/sql/editCalendar.php',$('#idEditCalendarForm').serialize(),function(response){
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