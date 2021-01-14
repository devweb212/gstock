import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link
} from "react-router-dom";


class Fouter extends React.Component {
		render() {
    return (
	<Router>
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Fouter Component</div>

                        <div className="card-body">I'm an Fouter component!</div>
                    </div>
                </div>
            </div>
        </div>
		 </Router>
    );
	}
}
export default Fouter;

