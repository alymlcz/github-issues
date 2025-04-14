import React, { useEffect, useState } from 'react';
import { fetchIssues } from '../api/api';
import './IssuesList.css'; // New CSS file for table styles

const IssuesList = () => {
  const [issues, setIssues] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const getIssues = async () => {
      const fetchedIssues = await fetchIssues();
      setIssues(fetchedIssues);
      setLoading(false);
    };
    getIssues();
  }, []);

  if (loading) {
    return <div>Loading...</div>;
  }

  return (
    <div>
      <h1>GitHub Issues</h1>
      {issues.length === 0 ? (
        <p>No issues found.</p>
      ) : (
        <table className="issues-table">
          <thead>
            <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Created By</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            {issues.map((issue) => (
              <tr key={issue.id}>
                <td>{issue.title}</td>
                <td>{issue.body}</td>
                <td>{issue.user?.login}</td>
                <td>{issue.state}</td>
              </tr>
            ))}
          </tbody>
        </table>
      )}
    </div>
  );
};

export default IssuesList;
