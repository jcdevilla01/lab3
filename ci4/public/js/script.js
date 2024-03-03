function startCountdown() {
        const targetBirthday = new Date('2024-06-10T00:00:00');

        function updateCountdown() {
        const now = new Date();
        const timeDifference = targetBirthday - now;

        if (timeDifference > 0) {
            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            document.getElementById('countdown').innerHTML =
                `${days}d ${hours}h ${minutes}m ${seconds}s until my birthday!`;
        } else {
            document.getElementById('countdown').innerHTML = 'Happy Birthday!';
        }
    }

    setInterval(updateCountdown, 1000);

    updateCountdown();
}
const Me = {
			  firstName: "Jacob Angelo",
			  middleName: "Corpuz",
			  lastName: "De Villa",
			  age: 21
			  };
function CallMyName() {
	document.getElementById("nm").innerHTML = Me.firstName + " " + Me.middleName + " " + Me.lastName;
}
class profile {
	constructor(firstName, middleName, lastName) {
		this.FirstName = FirstName;
		this.MiddleName = MiddleName;
		this.LastName = LastName;
		this.Age = Age;