// import React, {Component} from 'react'
import axios from 'axios'

export const RegisterPage = () => {
    return axios
    .get('/api/login', {
        headers: { 'Content-Type': 'application/json' }
    })
    .then(res => {
        // console.log(res);
        return res.data
    })
}

export const register = data => {
    return axios
    .post(
        '/api/login',
        {
            data:data
        },
        {
            headers: { 'Content-Type': 'application/json'}
        }
    )
    .then(function(response){
        console.log(response)
    })
}
