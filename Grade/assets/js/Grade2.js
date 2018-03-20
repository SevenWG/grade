
/*Ajax动态生成 成绩表格*/

$(document).ready(function(){

	$("#submit").click(function(){

	var student_id = $("#stuid").val();
        var course_id = $("#course").val();
        var order = $("#order").val();

        $.post(

        	"../../controlers/userAction/getGradeInfoAction.php",

        	{
                        student_id:student_id,
                        course_id:course_id,
                        order:order,
        	},

        	function(data)
		{	

                        var html="";
                        for( var i = 0; i < data.length; i++ ) {

                                var target_update="#"+data[i].scoreid;
                                var id_update=data[i].scoreid+"";
                                var update_id="update_"+data[i].scoreid;

                                var target_delete="#"+data[i].bill_id+"d";
                                var id_delete=data[i].bill_id+"d";

                                html += "<tr>";
                                html +=     "<td>" + data[i].stuid + "</td>";        
                                html +=     "<td>" + data[i].stuname + "</td>";             
                                html +=     "<td>" + data[i].coursename + "</td>";   
                                html +=     "<td>" + data[i].grade + "</td>";

                                html +=     "<td>";
                                html +=     "<button class='btn btn-small btn-success comment' data-toggle='modal' data-target='" +target_update+ "'>修改成绩</button>";
                                html +=        "<div class='modal fade' id='" +id_update+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                                html +=            "<div class='modal-dialog'>";
                                html +=                "<div class='modal-content'>";
                                html +=                 "<form role='form' action='' method='POST'>"//通过表单，POST evaluate,提交评论
                                html +=                    "<div class='modal-body'>";
                                html +=                       "<label for='name'>修改成绩</label>";
                                html +=                        " <textarea class='form-control' rows='1' id='"+update_id+"'>" + data[i].grade + "</textarea>";
                                html +=                         "</div>";
                                html +=                         "</div>";
                                html +=                         "<div class='modal-footer'>";
                                html +=                         "<button type='button' class='btn btn-default' data-dismiss='modal'>关闭</button>";
                                html +=                         "<button type='button' class='btn btn-primary submit' data-dismiss='modal' id='"+data[i].scoreid+"'>提交</button>";
                                html +=                         "</div>";
                                html +=                 "</form>";
                                html +=                "</div>";
                                html +=            "</div>"
                                html +=        "</div>";
                                html +=     "</td>";

                                html +=     "<td>";
                                html +=     "<button class='btn btn-small btn-danger deleteOrder' data-toggle='modal' data-target='" +target_delete+ "'>删除</button>";
                                html +=        "<div class='modal fade' id='" +id_delete+ "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                                html +=            "<div class='modal-dialog'>";
                                html +=                "<div class='modal-content'>";
                                html +=                 "<form role='form' action='' method='POST' name='"+data[i].scoreid+"'>";//通过表单,POST bill_id到后端文件,删除订单
                                html +=                         "<div class='modal-body'>";
                                html +=                         "<div class='form-group'>"; 
                                html +=                         "<label for='name'>删除成绩记录</label>";
                                html +=                         "<p >确定删除该成绩记录吗?</p>";
                                html +=                         "</div>";
                                html +=                         "</div>";
                                html +=                          "<div class='modal-footer'>";
                                html +=                         "<button type='button' class='btn btn-default' data-dismiss='modal'>取消</button>";
                                html +=                         "<button type='button' class='btn btn-danger confirmDelete' id='"+data[i].scoreid+"' data-dismiss='modal'>删除</button>";
                                html +=                         "</div>";
                                html +=                          "</form>";
                                html +=                "</div>";
                                html +=            "</div>"
                                html +=        "</div>";
                                html +=     "</td>";

                                html +="</tr>";
                        }
                $("#J_Tb").html(html);

                $(".submit").click(function(){

                    var scoreid = $(this).attr("id"); 
                    var update_id="#update_"+scoreid;
                    var grade=$(update_id).val();

                    $.post(
                        '../../controlers/userAction/updateScoreAction.php',
                        {
                            scoreid:scoreid,
                            grade:grade
                        },
                        function(){
                             alert('修改成功！');
                             self.location='../../views/user/grade.php';
                        }
                    );
                });

                $(".confirmDelete").click(function() {
                    var scoreid = $(this).attr("id"); 
                    $.post('../../controlers/userAction/deleteScoreAction.php',
                        {
                            scoreid:scoreid
                        },
                        function()
                        {    
                            alert('删除成功！');
                            self.location='../../views/user/grade.php';
                        }
                    );
                });


		},'json'

        	);
        
	});
});