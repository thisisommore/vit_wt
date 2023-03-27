const binary_search = (nums, to_find) =>{
    let left = 0,right = nums.length - 1;
    while (left <= right) {
      const mid_index = Math.floor((left + right) / 2);
      if (nums[mid_index] === to_find) 
        return mid_index;
      else if (nums[mid_index] < to_find)
        left = mid_index + 1;
      else 
        right = mid_index - 1;
    }
    return -1;
  }
  

const linear_search=(nums,to_find)=>{
    let i=0;
    for (const num of nums) {
        if (num==to_find){
            return i;
        }
        i++;
    }
    return -1;
}
function quick_sort(nums) {
    const pivot = nums[0];
    const left = [],right = [];
    if(!pivot) return []
    for (let index = 1; index < nums.length; index++) {
        if (nums[index] < pivot) 
            left.push(nums[index]);
        else 
            right.push(nums[index]);
    }
   
    const sort_left = quick_sort(left)
    const sort_right = quick_sort(right)
    const new_array=[...sort_left, pivot, ...sort_right]
    return new_array
}

function bubble_sort(nums) {
    for (var i = 0; i < nums.length; i++) {
      for (var j = 0; j < nums.length - i - 1; j++) {
        if (nums[j] > nums[j + 1]) {
          var temp = nums[j];
          nums[j] = nums[j + 1];
          nums[j + 1] = temp;
        }
      }
    }
    return nums;
}  


const on_quick_sort = ()=>{
    const elements_input = document.getElementById("elements_input")
    const sorted_p = document.getElementById("sorted")
    const array = elements_input.value.trim().split(",")
    const res = quick_sort(array)
    sorted_p.innerText = res.join(",")
}

const on_bubble_sort = ()=>{
    const elements_input = document.getElementById("elements_input")
    const sorted_p = document.getElementById("sorted")
    const array = elements_input.value.trim().split(",")
    const res = bubble_sort(array)
    sorted_p.innerText = res.join(",")
}

const on_binary_search = ()=>{
    const elements_input = document.getElementById("elements_input")
    const search_p = document.getElementById("search")
    const search_input = document.getElementById("search_input")

    const array = elements_input.value.trim().split(",").map(e=>e)
    const res = binary_search(array,search_input.value)
    search_p.innerText = res
}

const on_linear_search = ()=>{
    const elements_input = document.getElementById("elements_input")
    const search_p = document.getElementById("search")
    const search_input = document.getElementById("search_input")

    const array = elements_input.value.trim().split(",").map(e=>e)
    const res = linear_search(array,search_input.value)
    search_p.innerText = res
}

const on_reverse = ()=>{
  const elements_input = document.getElementById("elements_input")
  const reverse_p = document.getElementById("reverse")
  const array = elements_input.value.trim().split(",").map(e=>e)
  const res = array.reverse()
  reverse_p.innerText = res
}
  

nums =[4,3,7,86,34,34]
console.log(quick_sort(nums));
console.log(binary_search(nums,7));
  
