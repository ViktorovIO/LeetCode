class Solution {
public:
    vector<int> twoSum(vector<int>& nums, int target) {
        vector<int> result;
        for (int i=0; i < nums.size(); i++) {
            int j = 1;
            while (j < nums.size()) {
                if (i != j && nums[i] + nums[j] == target) {
                    result.push_back(i);
                    result.push_back(j);

                    return result;
                } else {
                    j++;
                }
            }
        }

        return result;
    }
};