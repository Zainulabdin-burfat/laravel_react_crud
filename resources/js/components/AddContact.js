import React from 'react';
import axios from 'axios';

class AddContact extends React.Component{
  state = {
    fullName:'',
    email:'',
    phone  :'',
  }

  handleInput = (e) => {
    this.setState({[e.target.name]: e.target.value});
  }
  
  saveContact = async (e) => {
    e.preventDefault();
    const res = await axios.post("/contact", this.state);
    this.setState({fullName:'',email:'',phone:''});
    // console.log(res);
    if (res.data.status == 200) {
      this.props.history.push("/");
    }
  }
  render(){
    return(
      <div className="row">
      <div className="col-sm-12">
        <form onSubmit={this.saveContact}>
          <div className="form-group">
            <input type="text" name="fullName" className="form-control" value={this.state.fullName} onChange={this.handleInput} placeholder="Enter Full Name" required />
          </div>
          <div className="form-group">
            <input type="email" name="email" className="form-control" value={this.state.email} onChange={this.handleInput} placeholder="Enter Your Email" required />
          </div>
          <div className="form-group">
            <input type="text" name="phone" className="form-control" value={this.state.phone} onChange={this.handleInput} placeholder="Enter Phone Number" required />
          </div>
          <div className="form-group">
            <input type="submit" className="btn btn-success" value="Add" />
          </div>
        </form>
      </div>
      </div>
    )
  }
}

export default AddContact;