1)
```sql
SELECT name, birthplace
FROM artists;
```
![image](https://user-images.githubusercontent.com/43187263/111240528-ca158880-85d1-11eb-9ec5-a306fe52e3c0.png)


2)
```sql
SELECT title, price
FROM artworks
WHERE year > 1600;
```
![image](https://user-images.githubusercontent.com/43187263/111240556-dd285880-85d1-11eb-854f-8023393bbe1a.png)


3)
```sql
SELECT title, type
FROM artworks
WHERE year = 2000 OR artist_name = 'Picasso';
```
![image](https://user-images.githubusercontent.com/43187263/111240648-02b56200-85d2-11eb-90aa-a168dfadf935.png)


4)
```sql
SELECT name, birthplace
FROM artists
WHERE dateofbirth BETWEEN '1880-01-01' AND '1930-01-01';
```
![image](https://user-images.githubusercontent.com/43187263/111242183-039bc300-85d5-11eb-9437-312a0a433cc0.png)


5)
```sql
SELECT name, country
FROM artists
WHERE style IN ('Modern', 'Baroque', 'Renaissance');
```
![image](https://user-images.githubusercontent.com/43187263/111240597-ef09fb80-85d1-11eb-87f1-9b901f323624.png)


6)
```sql
SELECT *
FROM artworks
ORDER BY title;
```
![image](https://user-images.githubusercontent.com/43187263/111240692-0ea12400-85d2-11eb-8ef9-f38fe24e2f2c.png)


7)
```sql
SELECT name, customer_id
FROM customers
INNER JOIN likeartists ON likeartists.customer_id = customers.id
WHERE artist_name = 'Picasso';
```
![image](https://user-images.githubusercontent.com/43187263/111241964-95ef9700-85d4-11eb-963c-b84d882c8724.png)


8)
```sql
SELECT name, customer_id
FROM customers
INNER JOIN likeartists ON likeartists.customer_id = customers.id
WHERE artist_name IN (
    SELECT artist_name 
    FROM artists
    INNER JOIN artworks ON artworks.artist_name = artists.name
    WHERE style = 'Renaissance' AND price > '30000' 
);
```
![image](https://user-images.githubusercontent.com/43187263/111243275-2af38f80-85d7-11eb-9a38-ef0000188162.png)







