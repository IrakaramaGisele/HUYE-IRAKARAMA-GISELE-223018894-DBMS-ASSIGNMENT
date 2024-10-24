
mysql> CREATE DATABASE RUHANDE;
Query OK, 1 row affected (0.02 sec)

mysql> USE RUHANDE;
Database changed
mysql> CREATE TABLE NGOMA;
ERROR 4028 (HY000): A table must have at least one visible column.
mysql> CREATE TABLE NGOMA(ID INT(10),F NAME CHAR(10),L NAME CHAR(10),PROVINCE CHAR(10),DISTRICT CHAR(10),SECTOR CHAR(10),CELL CHAR(10),EMAIL CHAR(20),TEL INT(10));
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NAME CHAR(10),L NAME CHAR(10),PROVINCE CHAR(10),DISTRICT CHAR(10),SECTOR CHAR(10' at line 1
mysql> CREATE TABLE NGOMA(ID INT(10),F_NAME CHAR(10),L_NAME CHAR(10),PROVINCE CHAR(10),DISTRICT CHAR(10),SECTOR CHAR(10),CELL CHAR(10),EMAIL CHAR(20),TEL INT(10));
Query OK, 0 rows affected, 2 warnings (0.02 sec)

mysql> INSERT INTO NGOMA VALUES('876654443','IRAKARAMA','GISELE','NORTH','MUSANZE','KINIGI','KAMPANGA','gizzoira@gmail.com','0780059152');
Query OK, 1 row affected (0.01 sec)

mysql> INSERT INTO NGOMA VALUES('8767549093','UMWALI','JUSTINE','WEST','RUBAVU','MBUGANGARI','GISENYI','justinetu@gmail.com','0790059152');
Query OK, 1 row affected, 1 warning (0.00 sec)

mysql> INSERT INTO NGOMA VALUES('8745349093','INEZA','NIKITA','NORTH','GICUMBI','BUGARI','GARUKA','inezanikitu@gmail.com','0797859152');
Query OK, 1 row affected, 2 warnings (0.00 sec)

mysql> INSERT INTO NGOMA VALUES('87452343','CYUSA','ERIC','SOUTH','KAMONYI','BUGARI','GITARE','ercirau@gmail.com','0797887152');
Query OK, 1 row affected (0.00 sec)

mysql> INSERT INTO NGOMA VALUES('874566743','IRAGENA','SALVATOR','SOUTH','HUYE','TUMBA','GITWA','iragenawa@gmail.com','0797888952');
Query OK, 1 row affected (0.00 sec)

mysql> INSERT INTO NGOMA VALUES('874589743','NIYIBIGIRA','BORA','WEST','KAYONZA','RWAGITIMA','GAHINI','boraniyibi@gmail.com','0797658952');
Query OK, 1 row affected (0.00 sec)

mysql> INSERT INTO NGOMA VALUES('874545743','UWINEZA','ALINE','WEST','RWAMAGANA','RWAHI','SEKA','uwineza@gmail.com','0797609952');
Query OK, 1 row affected (0.00 sec)

mysql> INSERT INTO NGOMA VALUES('874867743','MBUTO','BRANCH','KIGALI','KICUKIRO','MUHIMA','MUHETO','MBUTOBRA@gmail.com','0797602352');
Query OK, 1 row affected (0.00 sec)

mysql> INSERT INTO NGOMA VALUES('874324743','IRAKAZE','JOYSE','KIGALI','GASABO','MAHAMA','GATSATA','irakozeali@gmail.com','0782602352');
Query OK, 1 row affected (0.00 sec)

mysql> INSERT INTO NGOMA VALUES('874123743','MICOMYIZA,'ROSINE','NORTH','BURERA','BUTARO','KIDAHO','MICOMYIli@gmail.com','0782665352');
    '> ;
    '>

mysql> USE RUHANDE;
Database changed
mysql> SELECT *FROM NGOMA;
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+
| ID         | F_NAME     | L_NAME   | PROVINCE | DISTRICT  | SECTOR     | CELL     | EMAIL                | TEL       |
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+
|  876654443 | IRAKARAMA  | GISELE   | NORTH    | MUSANZE   | KINIGI     | KAMPANGA | gizzoira@gmail.com   | 780059152 |
| 2147483647 | UMWALI     | JUSTINE  | WEST     | RUBAVU    | MBUGANGARI | GISENYI  | justinetu@gmail.com  | 790059152 |
| 2147483647 | INEZA      | NIKITA   | NORTH    | GICUMBI   | BUGARI     | GARUKA   | inezanikitu@gmail.co | 797859152 |
|   87452343 | CYUSA      | ERIC     | SOUTH    | KAMONYI   | BUGARI     | GITARE   | ercirau@gmail.com    | 797887152 |
|  874566743 | IRAGENA    | SALVATOR | SOUTH    | HUYE      | TUMBA      | GITWA    | iragenawa@gmail.com  | 797888952 |
|  874589743 | NIYIBIGIRA | BORA     | WEST     | KAYONZA   | RWAGITIMA  | GAHINI   | boraniyibi@gmail.com | 797658952 |
|  874545743 | UWINEZA    | ALINE    | WEST     | RWAMAGANA | RWAHI      | SEKA     | uwineza@gmail.com    | 797609952 |
|  874867743 | MBUTO      | BRANCH   | KIGALI   | KICUKIRO  | MUHIMA     | MUHETO   | MBUTOBRA@gmail.com   | 797602352 |
|  874324743 | IRAKAZE    | JOYSE    | KIGALI   | GASABO    | MAHAMA     | GATSATA  | irakozeali@gmail.com | 782602352 |
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+
9 rows in set (0.00 sec)

mysql>



mysql> INSERT INTO NGOMA VALUES('544666433','MICOMYIZA','ROSINE','EAST','NTAGATARE','GAHINGA','GAKOMO','micomyizaro@gmail.c0m','0788745040');
Query OK, 1 row affected, 1 warning (0.00 sec)

mysql> show *from ngoma;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*from ngoma' at line 1
mysql> select *from ngoma;
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+
| ID         | F_NAME     | L_NAME   | PROVINCE | DISTRICT  | SECTOR     | CELL     | EMAIL                | TEL       |
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+
|  876654443 | IRAKARAMA  | GISELE   | NORTH    | MUSANZE   | KINIGI     | KAMPANGA | gizzoira@gmail.com   | 780059152 |
| 2147483647 | UMWALI     | JUSTINE  | WEST     | RUBAVU    | MBUGANGARI | GISENYI  | justinetu@gmail.com  | 790059152 |
| 2147483647 | INEZA      | NIKITA   | NORTH    | GICUMBI   | BUGARI     | GARUKA   | inezanikitu@gmail.co | 797859152 |
|   87452343 | CYUSA      | ERIC     | SOUTH    | KAMONYI   | BUGARI     | GITARE   | ercirau@gmail.com    | 797887152 |
|  874566743 | IRAGENA    | SALVATOR | SOUTH    | HUYE      | TUMBA      | GITWA    | iragenawa@gmail.com  | 797888952 |
|  874589743 | NIYIBIGIRA | BORA     | WEST     | KAYONZA   | RWAGITIMA  | GAHINI   | boraniyibi@gmail.com | 797658952 |
|  874545743 | UWINEZA    | ALINE    | WEST     | RWAMAGANA | RWAHI      | SEKA     | uwineza@gmail.com    | 797609952 |
|  874867743 | MBUTO      | BRANCH   | KIGALI   | KICUKIRO  | MUHIMA     | MUHETO   | MBUTOBRA@gmail.com   | 797602352 |
|  874324743 | IRAKAZE    | JOYSE    | KIGALI   | GASABO    | MAHAMA     | GATSATA  | irakozeali@gmail.com | 782602352 |
|  544666433 | MICOMYIZA  | ROSINE   | EAST     | NTAGATARE | GAHINGA    | GAKOMO   | micomyizaro@gmail.c0 | 788745040 |
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+
10 rows in set (0.00 sec)

mysql>
mysql> ALTER TABLE NGOMA ADD GENDER CHAR(10);
Query OK, 10 rows affected (0.05 sec)
Records: 10  Duplicates: 0  Warnings: 0

mysql> SHOW ALL *FROM NGOMA;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ALL *FROM NGOMA' at line 1
mysql> SELECT ALL *FROM NGOMA;
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+--------+
| ID         | F_NAME     | L_NAME   | PROVINCE | DISTRICT  | SECTOR     | CELL     | EMAIL                | TEL       | GENDER |
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+--------+
|  876654443 | IRAKARAMA  | GISELE   | NORTH    | MUSANZE   | KINIGI     | KAMPANGA | gizzoira@gmail.com   | 780059152 | NULL   |
| 2147483647 | UMWALI     | JUSTINE  | WEST     | RUBAVU    | MBUGANGARI | GISENYI  | justinetu@gmail.com  | 790059152 | NULL   |
| 2147483647 | INEZA      | NIKITA   | NORTH    | GICUMBI   | BUGARI     | GARUKA   | inezanikitu@gmail.co | 797859152 | NULL   |
|   87452343 | CYUSA      | ERIC     | SOUTH    | KAMONYI   | BUGARI     | GITARE   | ercirau@gmail.com    | 797887152 | NULL   |
|  874566743 | IRAGENA    | SALVATOR | SOUTH    | HUYE      | TUMBA      | GITWA    | iragenawa@gmail.com  | 797888952 | NULL   |
|  874589743 | NIYIBIGIRA | BORA     | WEST     | KAYONZA   | RWAGITIMA  | GAHINI   | boraniyibi@gmail.com | 797658952 | NULL   |
|  874545743 | UWINEZA    | ALINE    | WEST     | RWAMAGANA | RWAHI      | SEKA     | uwineza@gmail.com    | 797609952 | NULL   |
|  874867743 | MBUTO      | BRANCH   | KIGALI   | KICUKIRO  | MUHIMA     | MUHETO   | MBUTOBRA@gmail.com   | 797602352 | NULL   |
|  874324743 | IRAKAZE    | JOYSE    | KIGALI   | GASABO    | MAHAMA     | GATSATA  | irakozeali@gmail.com | 782602352 | NULL   |
|  544666433 | MICOMYIZA  | ROSINE   | EAST     | NTAGATARE | GAHINGA    | GAKOMO   | micomyizaro@gmail.c0 | 788745040 | NULL   |
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+--------+
10 rows in set (0.00 sec)
10 rows in set (0.00 sec)

mysql> UPDATE NGOMA SET GENDER='FEMALE' WHERE ID='876654443';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> UPDATE NGOMA SET GENDER='FEMALE' WHERE ID='2147483647';
Query OK, 2 rows affected (0.00 sec)
Rows matched: 2  Changed: 2  Warnings: 0

mysql> UPDATE NGOMA SET GENDER='FEMALE' WHERE ID='2147483647';
Query OK, 0 rows affected (0.00 sec)
Rows matched: 2  Changed: 0  Warnings: 0

mysql> UPDATE NGOMA SET GENDER='MALE' WHERE ID='87452343';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> UPDATE NGOMA SET GENDER='MALE' WHERE ID='874566743';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> UPDATE NGOMA SET GENDER='FEMALE' WHERE ID='874589743';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> UPDATE NGOMA SET GENDER='FEMALE' WHERE ID='874545743';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> UPDATE NGOMA SET GENDER='FEMALE' WHERE ID='874867743';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> UPDATE NGOMA SET GENDER='FEMALE' WHERE ID='874324743';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> UPDATE NGOMA SET GENDER='FEMALE' WHERE ID='544666433';
Query OK, 1 row affected (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> SELECT *FROM NGOMA;
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+--------+
| ID         | F_NAME     | L_NAME   | PROVINCE | DISTRICT  | SECTOR     | CELL     | EMAIL                | TEL       | GENDER |
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+--------+
|  876654443 | IRAKARAMA  | GISELE   | NORTH    | MUSANZE   | KINIGI     | KAMPANGA | gizzoira@gmail.com   | 780059152 | FEMALE |
| 2147483647 | UMWALI     | JUSTINE  | WEST     | RUBAVU    | MBUGANGARI | GISENYI  | justinetu@gmail.com  | 790059152 | FEMALE |
| 2147483647 | INEZA      | NIKITA   | NORTH    | GICUMBI   | BUGARI     | GARUKA   | inezanikitu@gmail.co | 797859152 | FEMALE |
|   87452343 | CYUSA      | ERIC     | SOUTH    | KAMONYI   | BUGARI     | GITARE   | ercirau@gmail.com    | 797887152 | MALE   |
|  874566743 | IRAGENA    | SALVATOR | SOUTH    | HUYE      | TUMBA      | GITWA    | iragenawa@gmail.com  | 797888952 | MALE   |
|  874589743 | NIYIBIGIRA | BORA     | WEST     | KAYONZA   | RWAGITIMA  | GAHINI   | boraniyibi@gmail.com | 797658952 | FEMALE |
|  874545743 | UWINEZA    | ALINE    | WEST     | RWAMAGANA | RWAHI      | SEKA     | uwineza@gmail.com    | 797609952 | FEMALE |
|  874867743 | MBUTO      | BRANCH   | KIGALI   | KICUKIRO  | MUHIMA     | MUHETO   | MBUTOBRA@gmail.com   | 797602352 | FEMALE |
|  874324743 | IRAKAZE    | JOYSE    | KIGALI   | GASABO    | MAHAMA     | GATSATA  | irakozeali@gmail.com | 782602352 | FEMALE |
|  544666433 | MICOMYIZA  | ROSINE   | EAST     | NTAGATARE | GAHINGA    | GAKOMO   | micomyizaro@gmail.c0 | 788745040 | FEMALE |
+------------+------------+----------+----------+-----------+------------+----------+----------------------+-----------+--------+
10 rows in set (0.00 sec)

mysql>

mysql>
mysql> ALTER TABLE NGOMA DROP EMAIL;
Query OK, 10 rows affected (0.05 sec)
Records: 10  Duplicates: 0  Warnings: 0

mysql> SELECT *FROM NGOMA;
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+
| ID         | F_NAME     | L_NAME   | PROVINCE | DISTRICT  | SECTOR     | CELL     | TEL       | GENDER |
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+
|  876654443 | IRAKARAMA  | GISELE   | NORTH    | MUSANZE   | KINIGI     | KAMPANGA | 780059152 | FEMALE |
| 2147483647 | UMWALI     | JUSTINE  | WEST     | RUBAVU    | MBUGANGARI | GISENYI  | 790059152 | FEMALE |
| 2147483647 | INEZA      | NIKITA   | NORTH    | GICUMBI   | BUGARI     | GARUKA   | 797859152 | FEMALE |
|   87452343 | CYUSA      | ERIC     | SOUTH    | KAMONYI   | BUGARI     | GITARE   | 797887152 | MALE   |
|  874566743 | IRAGENA    | SALVATOR | SOUTH    | HUYE      | TUMBA      | GITWA    | 797888952 | MALE   |
|  874589743 | NIYIBIGIRA | BORA     | WEST     | KAYONZA   | RWAGITIMA  | GAHINI   | 797658952 | FEMALE |
|  874545743 | UWINEZA    | ALINE    | WEST     | RWAMAGANA | RWAHI      | SEKA     | 797609952 | FEMALE |
|  874867743 | MBUTO      | BRANCH   | KIGALI   | KICUKIRO  | MUHIMA     | MUHETO   | 797602352 | FEMALE |
|  874324743 | IRAKAZE    | JOYSE    | KIGALI   | GASABO    | MAHAMA     | GATSATA  | 782602352 | FEMALE |
|  544666433 | MICOMYIZA  | ROSINE   | EAST     | NTAGATARE | GAHINGA    | GAKOMO   | 788745040 | FEMALE |
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+
10 rows in set (0.00 sec)

mysql>

mysql> SELECT *FROM NGOMA  WHERE GENDER=FEMALE;
ERROR 1054 (42S22): Unknown column 'FEMALE' in 'where clause'
mysql> SELECT *FROM NGOMA  WHERE GENDER='FEMALE';
+------------+------------+---------+----------+-----------+------------+----------+-----------+--------+
| ID         | F_NAME     | L_NAME  | PROVINCE | DISTRICT  | SECTOR     | CELL     | TEL       | GENDER |
+------------+------------+---------+----------+-----------+------------+----------+-----------+--------+
|  876654443 | IRAKARAMA  | GISELE  | NORTH    | MUSANZE   | KINIGI     | KAMPANGA | 780059152 | FEMALE |
| 2147483647 | UMWALI     | JUSTINE | WEST     | RUBAVU    | MBUGANGARI | GISENYI  | 790059152 | FEMALE |
| 2147483647 | INEZA      | NIKITA  | NORTH    | GICUMBI   | BUGARI     | GARUKA   | 797859152 | FEMALE |
|  874589743 | NIYIBIGIRA | BORA    | WEST     | KAYONZA   | RWAGITIMA  | GAHINI   | 797658952 | FEMALE |
|  874545743 | UWINEZA    | ALINE   | WEST     | RWAMAGANA | RWAHI      | SEKA     | 797609952 | FEMALE |
|  874867743 | MBUTO      | BRANCH  | KIGALI   | KICUKIRO  | MUHIMA     | MUHETO   | 797602352 | FEMALE |
|  874324743 | IRAKAZE    | JOYSE   | KIGALI   | GASABO    | MAHAMA     | GATSATA  | 782602352 | FEMALE |
|  544666433 | MICOMYIZA  | ROSINE  | EAST     | NTAGATARE | GAHINGA    | GAKOMO   | 788745040 | FEMALE |
+------------+------------+---------+----------+-----------+------------+----------+-----------+--------+
8 rows in set (0.00 sec)

mysql> SELECT *FROM NGOMA WHERE F_NAME='IRAKARAMA' AND SECTOR='KINIGI';
+-----------+-----------+--------+----------+----------+--------+----------+-----------+--------+
| ID        | F_NAME    | L_NAME | PROVINCE | DISTRICT | SECTOR | CELL     | TEL       | GENDER |
+-----------+-----------+--------+----------+----------+--------+----------+-----------+--------+
| 876654443 | IRAKARAMA | GISELE | NORTH    | MUSANZE  | KINIGI | KAMPANGA | 780059152 | FEMALE |
+-----------+-----------+--------+----------+----------+--------+----------+-----------+--------+
1 row in set (0.00 sec)

mysql> SELECT F_NAME,L_NAME,DISTRICT,SECTOR FROM NGOMA;
+------------+----------+-----------+------------+
| F_NAME     | L_NAME   | DISTRICT  | SECTOR     |
+------------+----------+-----------+------------+
| IRAKARAMA  | GISELE   | MUSANZE   | KINIGI     |
| UMWALI     | JUSTINE  | RUBAVU    | MBUGANGARI |
| INEZA      | NIKITA   | GICUMBI   | BUGARI     |
| CYUSA      | ERIC     | KAMONYI   | BUGARI     |
| IRAGENA    | SALVATOR | HUYE      | TUMBA      |
| NIYIBIGIRA | BORA     | KAYONZA   | RWAGITIMA  |
| UWINEZA    | ALINE    | RWAMAGANA | RWAHI      |
| MBUTO      | BRANCH   | KICUKIRO  | MUHIMA     |
| IRAKAZE    | JOYSE    | GASABO    | MAHAMA     |
| MICOMYIZA  | ROSINE   | NTAGATARE | GAHINGA    |
+------------+----------+-----------+------------+
10 rows in set (0.00 sec)

mysql> SELECT *FROM NGOMA WHERE L_NAME='NIKITA' OR SECTOR='MBUGANGARI';
+------------+--------+---------+----------+----------+------------+---------+-----------+--------+
| ID         | F_NAME | L_NAME  | PROVINCE | DISTRICT | SECTOR     | CELL    | TEL       | GENDER |
+------------+--------+---------+----------+----------+------------+---------+-----------+--------+
| 2147483647 | UMWALI | JUSTINE | WEST     | RUBAVU   | MBUGANGARI | GISENYI | 790059152 | FEMALE |
| 2147483647 | INEZA  | NIKITA  | NORTH    | GICUMBI  | BUGARI     | GARUKA  | 797859152 | FEMALE |
+------------+--------+---------+----------+----------+------------+---------+-----------+--------+
2 rows in set (0.00 sec)

mysql> ALTER TABLE NGOMA ADD MARITAL_STATUS;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1
mysql> ALTER TABLE NGOMA ADD MARITAL_STATUS CHAR(20);
Query OK, 10 rows affected (0.05 sec)
Records: 10  Duplicates: 0  Warnings: 0

mysql> SELECT *FROM NGOMA;
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+----------------+
| ID         | F_NAME     | L_NAME   | PROVINCE | DISTRICT  | SECTOR     | CELL     | TEL       | GENDER | MARITAL_STATUS |
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+----------------+
|  876654443 | IRAKARAMA  | GISELE   | NORTH    | MUSANZE   | KINIGI     | KAMPANGA | 780059152 | FEMALE | NULL           |
| 2147483647 | UMWALI     | JUSTINE  | WEST     | RUBAVU    | MBUGANGARI | GISENYI  | 790059152 | FEMALE | NULL           |
| 2147483647 | INEZA      | NIKITA   | NORTH    | GICUMBI   | BUGARI     | GARUKA   | 797859152 | FEMALE | NULL           |
|   87452343 | CYUSA      | ERIC     | SOUTH    | KAMONYI   | BUGARI     | GITARE   | 797887152 | MALE   | NULL           |
|  874566743 | IRAGENA    | SALVATOR | SOUTH    | HUYE      | TUMBA      | GITWA    | 797888952 | MALE   | NULL           |
|  874589743 | NIYIBIGIRA | BORA     | WEST     | KAYONZA   | RWAGITIMA  | GAHINI   | 797658952 | FEMALE | NULL           |
|  874545743 | UWINEZA    | ALINE    | WEST     | RWAMAGANA | RWAHI      | SEKA     | 797609952 | FEMALE | NULL           |
|  874867743 | MBUTO      | BRANCH   | KIGALI   | KICUKIRO  | MUHIMA     | MUHETO   | 797602352 | FEMALE | NULL           |
|  874324743 | IRAKAZE    | JOYSE    | KIGALI   | GASABO    | MAHAMA     | GATSATA  | 782602352 | FEMALE | NULL           |
|  544666433 | MICOMYIZA  | ROSINE   | EAST     | NTAGATARE | GAHINGA    | GAKOMO   | 788745040 | FEMALE | NULL           |
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+----------------+
10 rows in set (0.00 sec)

mysql> UPDATE NGOMA SET MARITAL_STATUS='SINGLE' WHERE GENDER='FEMALE';
Query OK, 8 rows affected (0.00 sec)
Rows matched: 8  Changed: 8  Warnings: 0

mysql> SELECT *FROM NGOMA;
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+----------------+
| ID         | F_NAME     | L_NAME   | PROVINCE | DISTRICT  | SECTOR     | CELL     | TEL       | GENDER | MARITAL_STATUS |
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+----------------+
|  876654443 | IRAKARAMA  | GISELE   | NORTH    | MUSANZE   | KINIGI     | KAMPANGA | 780059152 | FEMALE | SINGLE         |
| 2147483647 | UMWALI     | JUSTINE  | WEST     | RUBAVU    | MBUGANGARI | GISENYI  | 790059152 | FEMALE | SINGLE         |
| 2147483647 | INEZA      | NIKITA   | NORTH    | GICUMBI   | BUGARI     | GARUKA   | 797859152 | FEMALE | SINGLE         |
|   87452343 | CYUSA      | ERIC     | SOUTH    | KAMONYI   | BUGARI     | GITARE   | 797887152 | MALE   | NULL           |
|  874566743 | IRAGENA    | SALVATOR | SOUTH    | HUYE      | TUMBA      | GITWA    | 797888952 | MALE   | NULL           |
|  874589743 | NIYIBIGIRA | BORA     | WEST     | KAYONZA   | RWAGITIMA  | GAHINI   | 797658952 | FEMALE | SINGLE         |
|  874545743 | UWINEZA    | ALINE    | WEST     | RWAMAGANA | RWAHI      | SEKA     | 797609952 | FEMALE | SINGLE         |
|  874867743 | MBUTO      | BRANCH   | KIGALI   | KICUKIRO  | MUHIMA     | MUHETO   | 797602352 | FEMALE | SINGLE         |
|  874324743 | IRAKAZE    | JOYSE    | KIGALI   | GASABO    | MAHAMA     | GATSATA  | 782602352 | FEMALE | SINGLE         |
|  544666433 | MICOMYIZA  | ROSINE   | EAST     | NTAGATARE | GAHINGA    | GAKOMO   | 788745040 | FEMALE | SINGLE         |
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+----------------+
10 rows in set (0.00 sec)

mysql> UPDATE NGOMA SET MARITAL_STATUS='MARRIED' WHERE GENDER='MALE';
Query OK, 2 rows affected (0.00 sec)
Rows matched: 2  Changed: 2  Warnings: 0

mysql> SELECT *FROM NGOMA;
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+----------------+
| ID         | F_NAME     | L_NAME   | PROVINCE | DISTRICT  | SECTOR     | CELL     | TEL       | GENDER | MARITAL_STATUS |
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+----------------+
|  876654443 | IRAKARAMA  | GISELE   | NORTH    | MUSANZE   | KINIGI     | KAMPANGA | 780059152 | FEMALE | SINGLE         |
| 2147483647 | UMWALI     | JUSTINE  | WEST     | RUBAVU    | MBUGANGARI | GISENYI  | 790059152 | FEMALE | SINGLE         |
| 2147483647 | INEZA      | NIKITA   | NORTH    | GICUMBI   | BUGARI     | GARUKA   | 797859152 | FEMALE | SINGLE         |
|   87452343 | CYUSA      | ERIC     | SOUTH    | KAMONYI   | BUGARI     | GITARE   | 797887152 | MALE   | MARRIED        |
|  874566743 | IRAGENA    | SALVATOR | SOUTH    | HUYE      | TUMBA      | GITWA    | 797888952 | MALE   | MARRIED        |
|  874589743 | NIYIBIGIRA | BORA     | WEST     | KAYONZA   | RWAGITIMA  | GAHINI   | 797658952 | FEMALE | SINGLE         |
|  874545743 | UWINEZA    | ALINE    | WEST     | RWAMAGANA | RWAHI      | SEKA     | 797609952 | FEMALE | SINGLE         |
|  874867743 | MBUTO      | BRANCH   | KIGALI   | KICUKIRO  | MUHIMA     | MUHETO   | 797602352 | FEMALE | SINGLE         |
|  874324743 | IRAKAZE    | JOYSE    | KIGALI   | GASABO    | MAHAMA     | GATSATA  | 782602352 | FEMALE | SINGLE         |
|  544666433 | MICOMYIZA  | ROSINE   | EAST     | NTAGATARE | GAHINGA    | GAKOMO   | 788745040 | FEMALE | SINGLE         |
+------------+------------+----------+----------+-----------+------------+----------+-----------+--------+----------------+
10 rows in set (0.00 sec)

mysql>

mysql> SELECT *FROM NGOMA WHERE PROVINCE='WEST' AND MARITAL_STATUS='SINGLE';
+------------+------------+---------+----------+-----------+------------+---------+-----------+--------+----------------+
| ID         | F_NAME     | L_NAME  | PROVINCE | DISTRICT  | SECTOR     | CELL    | TEL       | GENDER | MARITAL_STATUS |
+------------+------------+---------+----------+-----------+------------+---------+-----------+--------+----------------+
| 2147483647 | UMWALI     | JUSTINE | WEST     | RUBAVU    | MBUGANGARI | GISENYI | 790059152 | FEMALE | SINGLE         |
|  874589743 | NIYIBIGIRA | BORA    | WEST     | KAYONZA   | RWAGITIMA  | GAHINI  | 797658952 | FEMALE | SINGLE         |
|  874545743 | UWINEZA    | ALINE   | WEST     | RWAMAGANA | RWAHI      | SEKA    | 797609952 | FEMALE | SINGLE         |
+------------+------------+---------+----------+-----------+------------+---------+-----------+--------+----------------+
3 rows in set (0.00 sec)

mysql>





































































