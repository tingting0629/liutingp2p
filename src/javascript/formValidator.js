 $(function() {
        $('#form_test').bootstrapValidator({
            message: 'This value is not valid',
            //excluded:[":hidden",":disabled",":not(visible)"] ,//bootstrapValidator的默认配置
            excluded: ':disabled',//关键配置，表示只对于禁用域不进行验证，其他的表单元素都要验证

            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',//显示验证成功或者失败时的一个小图标
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
            	//用户名的验证
                username: {
                    message: '用户名不能为空',//默认提示信息
                    validators: {
                        notEmpty: {
                            message: '用户名必填不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度不能小于6位或超过18位'
                        }
                    }
                },
                //密码的验证
                password1: {
                    message: '密码不能为空',//默认提示信息
                    validators: {
                        notEmpty: {
                            message: '密码必填不能为空'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码长度不能小于6位'
                        }
                    }
                },
                //确认密码
                 password2: {
                    validators: {
                        notEmpty: {
                           message: '确认密码与密码必须一致',
                        },
                        identical: {
                        	field: 'password1',
                       		message: '确认密码与密码不一致！请重新输入'
                        }
                    }
                },
                //真实姓名
                 realname: {
                    validators: {
                        notEmpty: {
                           message: '真实姓名不能为空',
                        },              
                    }
                },
                 //手机号码
                 mobile: {
                    validators: {
                        notEmpty: {
                           message: '手机号码必须为纯数字',
                        },
                        identical: {
                        	field: 'password1',
                       		message: '确认密码与密码不一致！请重新输入'
                        }
                    }
                },
               
                

            }
        })