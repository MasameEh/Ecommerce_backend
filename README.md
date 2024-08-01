# E-commerce App Backend

This repository contains the backend implementation for an e-commerce application. It currently includes functionalities for user authentication, including signup, login, and verification code processes.

## Folder Structure

```plaintext
├── auth/
│   ├── login.php
│   ├── signup.php
│   ├── verifycode.php
├── forgotpass/
│   ├── checkemail.php
│   ├── resetpass.php
│   ├── verifycode.php
├── connect.php
├── functions.php
├── test.php
```
### auth/

This directory contains the authentication-related functionalities:

- `login.php`: Handles user login.
- `signup.php`: Handles user signup.
- `verifycode.php`: Handles the verification of user accounts via a verification code.

### connect.php

This file contains the database connection details and establishes a connection to the database.

### functions.php

This file contains various utility functions used across the backend for different operations, including those related to authentication.

### test.php

This file contains test implementations and examples of the backend functionalities.
