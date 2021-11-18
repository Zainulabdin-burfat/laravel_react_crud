import React from 'react';
import axios from "axios";
import Contact from "./Contact";

class Contacts extends React.Component{

  state = {
    contacts: [],
    loading:true,
  }
  fetchContacts = async () =>{

    const res = await axios.get("/add_contact");

    if (res.data.status == 200) {
      this.setState({contacts: res.data.contacts});
      this.setState({loading:false});
    }
  }

  componentDidMount(){
    this.fetchContacts();
  }
  render(){
    if (this.state.loading) {
      return <h1>Loading ...</h1>
    }
    return(
        <div className="row">
          <div className="col-sm-12">
            {this.state.contacts.map(contact => (
              <Contact contact={contact} key={contact.id} />
            ))}
          </div>      
        </div>      
      )
  }
}

export default Contacts;