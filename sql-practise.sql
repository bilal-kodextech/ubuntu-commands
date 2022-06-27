select * from users where(id = (select  Round(count(id)/2) from users));

select count(id) as num_of_users , userType
from users
where userType = 'owner'
group by userType;


