import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router,Switch,Route,Link } from "react-router-dom";

import Index from './Index';
import About from './About';


	class Header extends React.Component {
		render() {
    return (
		<Router>
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
					<Link to="/">Home</Link>
					<Link to="/about">about</Link>
					
					
					</div>
                </div>
            </div>
        </div>
	  </Router>
    );
	}
}
export default Header;


