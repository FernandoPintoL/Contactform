import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
export default class Adm extends Component {
    constructor(){
        super();
        this.state = {
            adm : []
        }
    }
    componentWillMount(){
        axios.get('user').then(response =>{
            this.setState({
                adm : response.data
            });
        }).catch(errors => {
            console.log(errors);
        })
    }
    render() {
        return (            
            <div className="container">
                {this.state.adm.map(ad => {ad.name})}
            </div>
        );
    }
}

if (document.getElementById('adm')) {
    ReactDOM.render(<Adm />, document.getElementById('adm'));
}