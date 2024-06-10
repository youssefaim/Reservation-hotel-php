# Reservation-hotel-php

Here's a description for GitHub explaining what the PHP code will display:

---

## PHP Script for Displaying Client Data from MySQL Database

This PHP script, embedded within an HTML document, connects to a MySQL database to retrieve and display client information in a styled table. The table includes various client details such as ID, CIN (Customer Identification Number), Name, Surname, Email, Password, Age, and Operations for modifying or deleting records. Here's a detailed overview of what the code does:

### Key Features

1. **Database Connection**: 
   - Connects to a MySQL database named `hotel` using the PDO extension.
   - Retrieves data from the `client` table.

2. **Data Display**:
   - Renders a table on the webpage displaying all client records from the database.
   - Each row shows individual client details:
     - **ID**: Client ID.
     - **CIN**: Customer Identification Number.
     - **NOM**: Last Name.
     - **PRENOM**: First Name.
     - **EMAIL**: Email Address.
     - **PASSWORD**: Password.
     - **AGE**: Age, color-coded by range:
       - Green for age ≤ 18.
       - Yellow for age between 19 and 29.
       - Red for age ≥ 30.

3. **Row Operations**:
   - **Modify**: Each row includes a "Modify" button linking to `mod.php`, passing the client ID via URL.
   - **Delete**: Each row also has a "Delete" button linking to `sup.php`, also passing the client ID via URL.

4. **Add New Record**:
   - Provides a link to `ajouter.php` to add a new client record.

### User Interface

- **Styling**:
  - Utilizes Bootstrap for responsive design and styling.
  - Custom inline CSS for padding in table cells.

- **Interactive Elements**:
  - Buttons for modifying and deleting client records styled with background colors and rounded corners.

### Example Output

The script generates an HTML table like this:

| ID | CIN  | NOM  | PRENOM | EMAIL | PASSWORD | AGE          | OPERATION          |
|----|------|------|--------|-------|----------|--------------|--------------------|
| 1  | A123 | Smith| John   | john@example.com | ****** | <div style="background-color:green; width:60px;">18 ans</div> | [Modify] [Delete] |
| 2  | B456 | Doe  | Jane   | jane@example.com | ****** | <div style="background-color:yellow; width:60px;">25 ans</div> | [Modify] [Delete] |
| 3  | C789 | Roe  | Richard| richard@example.com | ****** | <div style="background-color:red; width:60px;">35 ans</div> | [Modify] [Delete] |

---

You can use this script to display and manage client records efficiently through a simple and interactive interface.
