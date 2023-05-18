use test2;
select user.firstName, user.lastName, city.city 
from user, city
where user.city = city.id;