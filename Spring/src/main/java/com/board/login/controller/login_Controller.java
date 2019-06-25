package com.board.login.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;


@RequestMapping("/login")
@Controller
public class login_Controller {

	@RequestMapping("/main")
	public String loginPage() {
		return "login";
	}
	
	
		
}
