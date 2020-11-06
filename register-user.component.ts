import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';
import { Router } from '@angular/router';
import { UserService } from 'src/services/user.service';
import { IRegisterUser } from '../interfaces/RegisterUser';
import { DatePipe } from '@angular/common';
@Component({
  selector: 'app-register-user',
  templateUrl: './register-user.component.html',
  styleUrls: ['./register-user.component.css']
})
export class RegisterUserComponent implements OnInit {

  status: number;
  datePipeString : string;
  currentDate: Date;
  constructor(private _userservice:UserService,private router:Router,private datePipe: DatePipe) {
    let yesterdayDate = new Date();
    this.currentDate = new Date();
    yesterdayDate.setDate(this.currentDate.getDate() - 1);
    this.datePipeString = this.datePipe.transform(yesterdayDate, 'y-MM-dd');
    console.log(this.datePipeString);
   }
  submitRegisterForm(form: NgForm) {

    
    if(form.value.fname != null && form.value.lname!=null && form.value.email != null && 
      form.value.password1 != null && form.value.password2 != null && form.value.mobno !=null &&
       form.value.gender !=null && form.value.dob !=null && form.value.address !=null)
    {
      var registerUser : IRegisterUser;
      registerUser = {
        firstName: form.value.fname,
        lastName : form.value.lname,
        emailId : form.value.email,
        password : form.value.password1,
        contactNumber: form.value.mobno,
        gender:form.value.gender,
        dob : form.value.dob,
        address : form.value.address,
      }
      
        // console.log(registerUser.address);
        // console.log(registerUser.firstName);
        // console.log(registerUser.lastName);
        // console.log(registerUser.contactNumber);
        // console.log(registerUser.password);
        // console.log(registerUser.gender);
        // console.log(registerUser.emailId);
       
      
     this._userservice.RegisterUser(registerUser).subscribe(
       x => {
           this.status = x;
           if(this.status == 1)
           {
            alert("User Successfully Registered");
             this.router.navigate(['/login']);
           }
           else {
            console.log(status);
           
           } 
           
       },
       y => {
         console.log(y);
         alert("Try Again Later");
       },
       () => console.log("Method Executed Successfully")
     );
   }
    else
    {
      alert('All fields are mandatory');
    }
   }
  ngOnInit() {
    
    
  }

}
