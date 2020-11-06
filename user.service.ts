import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { catchError } from 'rxjs/operators';
import { Observable, throwError } from 'rxjs';

import { IRegisterUser } from 'src/app/interfaces/RegisterUser';
@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(private http: HttpClient) { }

  RegisterUser(registerUser: IRegisterUser){
    
    return this.http.post<number>('http://localhost:61994/api/user/AddCustomer', registerUser).pipe(catchError(this.errorHandler));
  }

  ValidateUserCredentials(emailId: String ,password :String ) {
    var userCredentials = {"EmailId" : emailId, "Password" : password};
    return this.http.post<number>('http://localhost:61994/api/user/ValidateUserCredentials', userCredentials).pipe(catchError(this.errorHandler));
  }
  errorHandler(error: HttpErrorResponse) {
    console.error(error);
    return throwError(error.message || "Server Error");
  }
}
