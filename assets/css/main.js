let evennum = [2,4,6];

let oddnum = [1,3,5,7];

let num =evennum.concat(oddnum);
console.log(num);


class Manager{

	itDetails(name,id){
		this.name = name;
		this.id = id;
	}
}
let man = new Manager();
man.itDetails('saurabh',1201);
console.log(man.name);
console.log(man.id);