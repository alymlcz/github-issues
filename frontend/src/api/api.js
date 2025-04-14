import axios from 'axios';

// Function to fetch issues from the backend API
export const fetchIssues = async () => {
  try {
    const response = await axios.get('http://github-issues.local:8080/api/get-issues');
    return response.data;
  } catch (error) {
    console.error('Error fetching issues:', error);
    return [];
  }
};
