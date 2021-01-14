import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Header from './Header';
import Fouter from './Fouter';


	class Index extends React.Component {
		render() {
    return (
	
        <div className="container">
			<Header/>
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component 12</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
			<Fouter/>
        </div>
		
    );
	}
}


export default Index;

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
