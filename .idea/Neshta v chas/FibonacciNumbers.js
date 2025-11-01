
let prev = 3;
let current = 5;

for (let i = 0; i < 10; i++) {
    let next = prev + current;
    console.log(next);
    prev = current;
    current = next;
}
